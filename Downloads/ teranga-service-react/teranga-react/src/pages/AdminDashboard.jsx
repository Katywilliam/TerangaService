import { useState } from 'react';
import Icon from '../components/Icons';

const users = [
  { nom: 'Aminata Ba', email: 'aminata@email.com', role: 'Client', statut: 'Actif', date: '15 juin 2026' },
  { nom: 'Mamadou Sow', email: 'mamadou@email.com', role: 'Prestataire', statut: 'Actif', date: '10 juin 2026' },
  { nom: 'Fatou Ndiaye', email: 'fatou@email.com', role: 'Prestataire', statut: 'En attente', date: '28 juin 2026' },
  { nom: 'Omar Badji', email: 'omar@email.com', role: 'Prestataire', statut: 'Actif', date: '1er juin 2026' },
  { nom: 'Rokhaya Fall', email: 'rokhaya@email.com', role: 'Client', statut: 'Actif', date: '22 juin 2026' },
];

const reservations = [
  { id: '#1042', client: 'Aminata Ba', service: 'Ménage', prestataire: 'Mamadou Sow', montant: '3 500', statut: 'Confirmé' },
  { id: '#1043', client: 'Moussa Diop', service: 'Plomberie', prestataire: 'Omar Badji', montant: '5 000', statut: 'En cours' },
  { id: '#1044', client: 'Ndèye Fall', service: 'Électricité', prestataire: 'Fatou Ndiaye', montant: '5 500', statut: 'En attente' },
  { id: '#1045', client: 'Ibrahima Sy', service: 'Informatique', prestataire: 'Ibrahima Cissé', montant: '4 500', statut: 'Terminé' },
];

function Badge({ s }) {
  const map = { Actif: 'badge-green', 'En attente': 'badge-amber', Confirmé: 'badge-green', 'En cours': 'badge-blue', Terminé: 'badge-blue', Annulé: 'badge-red', Prestataire: 'badge-blue', Client: 'badge-green' };
  return <span className={map[s] || 'badge-blue'}>{s}</span>;
}

export default function AdminDashboard() {
  const [tab, setTab] = useState('semaine');
  const [toast, setToast] = useState('');

  function approve(name) {
    setToast(`✓ ${name} approuvé`);
    setTimeout(() => setToast(''), 3000);
  }

  return (
    <div className="max-w-7xl mx-auto px-4 py-8 font-[Poppins]">

      {toast && (
        <div className="fixed bottom-6 right-6 bg-[#1B3A6B] text-white px-5 py-3 rounded-xl text-sm font-medium shadow-xl z-50 animate-fade-up">
          {toast}
        </div>
      )}

      
      <div className="flex items-center gap-3 mb-7">
        <div className="w-12 h-12 bg-[#1B3A6B] rounded-xl flex items-center justify-center">
          <Icon name="shield" size={22} color="white" />
        </div>
        <div>
          <h1 className="text-xl font-bold text-[#1B3A6B] mb-0">Administration</h1>
          <p className="text-sm text-gray-400 mt-0">Gérez votre plateforme Teranga Service</p>
        </div>
        <span className="ml-auto bg-amber-100 text-amber-700 text-xs font-bold px-3 py-1.5 rounded-full flex items-center gap-1">
          <Icon name="shield" size={12} color="#92400e" /> Admin
        </span>
      </div>

      
      <div className="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
        {[
          { val: '1 528', label: 'Clients', icon: 'users', bg: 'bg-blue-50', ic: '#1e40af', trend: '+12%' },
          { val: '312', label: 'Prestataires', icon: 'tool', bg: 'bg-green-50', ic: '#16A34A', trend: '+5%' },
          { val: '4 820', label: 'Réservations', icon: 'calendar', bg: 'bg-purple-50', ic: '#4c1d95', trend: '+18%' },
          { val: '14.2M', label: 'Revenus (FCFA)', icon: 'dollar', bg: 'bg-amber-50', ic: '#D97706', trend: '+24%' },
        ].map((s, i) => (
          <div key={i} className="card p-5 hover:shadow-md transition-shadow">
            <div className="flex items-start justify-between mb-3">
              <div className={`w-10 h-10 ${s.bg} rounded-xl flex items-center justify-center`}>
                <Icon name={s.icon} size={20} color={s.ic} />
              </div>
              <span className="badge-green text-[10px]">{s.trend}</span>
            </div>
            <p className="text-2xl font-bold text-[#1B3A6B] mb-0">{s.val}</p>
            <p className="text-xs text-gray-500 mt-1">{s.label}</p>
          </div>
        ))}
      </div>

      <div className="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">

        
        <div className="lg:col-span-2 card border-t-4 border-[#3A9E3A] overflow-hidden">
          <div className="flex items-center justify-between px-6 py-4 border-b border-gray-100">
            <h2 className="font-bold text-[#1B3A6B] text-sm">Réservations récentes</h2>
            <div className="flex gap-1">
              {['semaine', 'mois', 'annee'].map(t => (
                <button key={t} onClick={() => setTab(t)} className={`px-3 py-1 text-xs font-medium rounded-lg transition-all ${tab === t ? 'bg-[#1B3A6B] text-white' : 'bg-gray-100 text-gray-500 hover:bg-gray-200'}`}>
                  {t === 'semaine' ? 'Semaine' : t === 'mois' ? 'Mois' : 'Année'}
                </button>
              ))}
            </div>
          </div>
          <div className="overflow-x-auto">
            <table>
              <thead className="bg-gray-50">
                <tr>
                  {['ID', 'Client', 'Service', 'Prestataire', 'Montant', 'Statut'].map(h => (
                    <th key={h} className="px-5 py-3 text-xs text-gray-500 font-semibold">{h}</th>
                  ))}
                </tr>
              </thead>
              <tbody>
                {reservations.map((r, i) => (
                  <tr key={i} className="border-b border-gray-50 hover:bg-gray-50 last:border-0">
                    <td className="px-5 py-3.5 text-xs text-gray-400 font-mono">{r.id}</td>
                    <td className="px-5 py-3.5 text-sm font-medium text-[#1B3A6B]">{r.client}</td>
                    <td className="px-5 py-3.5 text-sm text-gray-600">{r.service}</td>
                    <td className="px-5 py-3.5 text-sm text-gray-600">{r.prestataire}</td>
                    <td className="px-5 py-3.5 text-sm font-bold text-[#3A9E3A]">{r.montant} F</td>
                    <td className="px-5 py-3.5"><Badge s={r.statut} /></td>
                  </tr>
                ))}
              </tbody>
            </table>
          </div>
        </div>

        
        <div className="space-y-4">
          <div className="card p-5 border-t-4 border-[#1B3A6B]">
            <h2 className="font-bold text-[#1B3A6B] text-sm mb-4">Actions rapides</h2>
            {[
              { label: 'Gérer les utilisateurs', icon: 'users', color: 'bg-[#1B3A6B]' },
              { label: 'Gérer les services', icon: 'tool', color: 'bg-[#3A9E3A]' },
              { label: 'Voir les réservations', icon: 'calendar', color: 'bg-purple-600' },
              { label: 'Signalements', icon: 'bell', color: 'bg-red-500' },
            ].map((a, i) => (
              <button key={i} className={`${a.color} text-white flex items-center gap-3 w-full px-4 py-3 rounded-xl font-medium text-sm mb-2 hover:opacity-90 transition-opacity text-left`}>
                <Icon name={a.icon} size={16} color="white" />
                {a.label}
              </button>
            ))}
          </div>

          <div className="card p-5 border-t-4 border-amber-400">
            <h2 className="font-bold text-[#1B3A6B] text-sm mb-3">Litiges actifs</h2>
            {[
              { id: '#L-021', desc: 'Prestataire absent', urgence: 'Haute' },
              { id: '#L-022', desc: 'Qualité insuffisante', urgence: 'Normale' },
            ].map((l, i) => (
              <div key={i} className="border border-red-100 rounded-lg px-4 py-3 mb-2 bg-red-50">
                <div className="flex justify-between items-center mb-1">
                  <span className="font-mono text-xs text-gray-400">{l.id}</span>
                  <span className={`text-xs font-semibold ${l.urgence === 'Haute' ? 'text-red-600' : 'text-amber-600'}`}>{l.urgence}</span>
                </div>
                <p className="text-sm text-gray-700">{l.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </div>

      
      <div className="card border-t-4 border-[#3A9E3A] overflow-hidden">
        <div className="flex items-center justify-between px-6 py-4 border-b border-gray-100">
          <h2 className="font-bold text-[#1B3A6B] text-sm">Utilisateurs récents</h2>
        </div>
        <div className="overflow-x-auto">
          <table>
            <thead className="bg-gray-50">
              <tr>
                {['Nom', 'Email', 'Rôle', 'Statut', 'Date inscription', 'Actions'].map(h => (
                  <th key={h} className="px-5 py-3 text-xs text-gray-500 font-semibold">{h}</th>
                ))}
              </tr>
            </thead>
            <tbody>
              {users.map((u, i) => (
                <tr key={i} className="border-b border-gray-50 hover:bg-gray-50 last:border-0">
                  <td className="px-5 py-3.5 font-medium text-sm text-[#1B3A6B]">{u.nom}</td>
                  <td className="px-5 py-3.5 text-sm text-gray-500">{u.email}</td>
                  <td className="px-5 py-3.5"><Badge s={u.role} /></td>
                  <td className="px-5 py-3.5"><Badge s={u.statut} /></td>
                  <td className="px-5 py-3.5 text-sm text-gray-400">{u.date}</td>
                  <td className="px-5 py-3.5">
                    <div className="flex gap-1.5">
                      {u.statut === 'En attente' && (
                        <button onClick={() => approve(u.nom)} className="text-xs bg-[#3A9E3A] text-white px-2.5 py-1 rounded-md font-medium hover:bg-[#2d8a2d] transition-colors">
                          Approuver
                        </button>
                      )}
                      <button className="text-xs border border-gray-300 text-gray-500 px-2.5 py-1 rounded-md font-medium hover:bg-gray-50 transition-colors">
                        Voir
                      </button>
                    </div>
                  </td>
                </tr>
              ))}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  );
}
