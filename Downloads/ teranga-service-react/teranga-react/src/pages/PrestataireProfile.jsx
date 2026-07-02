import { Link } from 'react-router-dom';
import Icon from '../components/Icons';

const reviews = [
  { name: 'Fatou D.', note: 5, text: 'Travail impeccable, très ponctuel. Je recommande vivement !', date: '12 juin 2026' },
  { name: 'Moussa K.', note: 5, text: "Excellent prestataire, mon appartement n'a jamais été aussi propre.", date: '5 juin 2026' },
  { name: 'Mariama S.', note: 4, text: 'Très professionnel et efficace. Petite heure de retard mais service parfait.', date: '1er juin 2026' },
];

export default function PrestataireProfile() {
  return (
    <div>
      
      <section className="bg-gradient-to-r from-[#1B3A6B] via-[#2d5fa8] to-[#3A9E3A] text-white py-12 px-5 text-center">
        <div className="max-w-2xl mx-auto">
          <div className="w-20 h-20 rounded-full bg-white/20 flex items-center justify-center mx-auto mb-4">
            <Icon name="user" size={40} color="white" />
          </div>
          <h1 className="text-3xl font-bold mb-1 text-white">Mamadou Sow</h1>
          <p className="opacity-90 mb-4 text-sm">Spécialiste ménage et entretien · Plateau, Dakar</p>

          <div className="flex justify-center gap-2 flex-wrap mb-5">
            <span className="bg-amber-400 text-amber-900 text-xs font-semibold px-3 py-1.5 rounded-full flex items-center gap-1">
              <Icon name="star" size={13} color="#78350F" /> 4.9 · 127 avis
            </span>
            <span className="bg-white/20 text-white text-xs font-semibold px-3 py-1.5 rounded-full flex items-center gap-1">
              <Icon name="clock" size={13} color="white" /> 3 ans d'expérience
            </span>
            <span className="bg-white/20 text-white text-xs font-semibold px-3 py-1.5 rounded-full flex items-center gap-1">
              <Icon name="check" size={13} color="white" /> 200+ prestations
            </span>
          </div>

          <div className="flex justify-center gap-3 flex-wrap">
            <Link to="/reserver" className="flex items-center gap-2 bg-[#3A9E3A] hover:bg-[#2d8a2d] text-white px-5 py-2.5 rounded-lg font-semibold text-sm no-underline transition-colors">
              <Icon name="calendar" size={15} color="white" /> Réserver
            </Link>
            <Link to="/contact" className="flex items-center gap-2 bg-white/20 hover:bg-white/30 text-white px-5 py-2.5 rounded-lg text-sm no-underline transition-colors border border-white/30">
              <Icon name="chat" size={15} color="white" /> Contacter
            </Link>
          </div>
        </div>
      </section>

      
      <div className="max-w-5xl mx-auto px-5 py-10">
        <div className="grid grid-cols-1 md:grid-cols-3 gap-7">

          
          <div className="md:col-span-2 space-y-6">
            
            <div className="card p-6 border-t-4 border-[#3A9E3A]">
              <h2 className="font-bold text-[#1B3A6B] text-base mb-3">À propos</h2>
              <p className="text-gray-600 text-sm leading-relaxed">
                Professionnel du ménage depuis 3 ans, je propose des services de nettoyage complet, repassage et entretien de maison. Je travaille avec des produits de qualité et m'engage à rendre votre espace impeccable. Ponctualité et discrétion garanties.
              </p>
            </div>

            
            <div className="card p-6 border-t-4 border-[#3A9E3A]">
              <h2 className="font-bold text-[#1B3A6B] text-base mb-4">Services proposés</h2>
              <div className="space-y-3">
                {[
                  { s: 'Ménage complet', p: '3 500 FCFA/h' },
                  { s: 'Repassage', p: '2 000 FCFA/h' },
                  { s: 'Nettoyage vitres', p: '4 000 FCFA/h' },
                  { s: 'Entretien extérieur', p: '3 000 FCFA/h' },
                ].map((item, i) => (
                  <div key={i} className="flex items-center justify-between bg-gray-50 rounded-lg px-4 py-3">
                    <div className="flex items-center gap-2">
                      <Icon name="check" size={14} color="#3A9E3A" />
                      <span className="text-sm text-gray-700">{item.s}</span>
                    </div>
                    <span className="text-sm font-bold text-[#3A9E3A]">{item.p}</span>
                  </div>
                ))}
              </div>
            </div>

            
            <div className="card p-6 border-t-4 border-[#3A9E3A]">
              <h2 className="font-bold text-[#1B3A6B] text-base mb-4">Avis clients</h2>
              <div className="divide-y divide-gray-100">
                {reviews.map((r, i) => (
                  <div key={i} className="py-4 first:pt-0">
                    <div className="flex items-center justify-between mb-2">
                      <div className="flex items-center gap-2">
                        <div className="w-8 h-8 bg-[#1B3A6B] rounded-full flex items-center justify-center text-white text-xs font-bold">{r.name[0]}</div>
                        <span className="font-semibold text-sm text-[#1B3A6B]">{r.name}</span>
                      </div>
                      <div className="flex items-center gap-1">
                        {[...Array(r.note)].map((_, j) => <Icon key={j} name="star" size={12} color="#FBBF24" />)}
                      </div>
                    </div>
                    <p className="text-gray-600 text-sm italic leading-relaxed">"{r.text}"</p>
                    <p className="text-gray-400 text-xs mt-1">{r.date}</p>
                  </div>
                ))}
              </div>
            </div>
          </div>

          
          <div className="space-y-5">
            
            <div className="card p-5 border-t-4 border-[#3A9E3A] sticky top-20">
              <h3 className="font-bold text-[#1B3A6B] mb-4">Faire une réservation</h3>
              <div className="space-y-3">
                <div>
                  <label className="form-label">Date souhaitée</label>
                  <input type="date" className="form-input" />
                </div>
                <div>
                  <label className="form-label">Heure</label>
                  <select className="form-input cursor-pointer">
                    <option>08:00</option><option>09:00</option><option>10:00</option><option>14:00</option>
                  </select>
                </div>
                <div>
                  <label className="form-label">Service</label>
                  <select className="form-input cursor-pointer">
                    <option>Ménage complet</option><option>Repassage</option><option>Nettoyage vitres</option>
                  </select>
                </div>
                <Link to="/reserver" className="w-full flex items-center justify-center gap-2 bg-[#3A9E3A] hover:bg-[#2d8a2d] text-white text-sm font-semibold py-3 rounded-lg no-underline transition-colors">
                  <Icon name="calendar" size={15} color="white" />
                  Réserver maintenant
                </Link>
              </div>
            </div>

            
            <div className="card p-5 border-t-4 border-[#1B3A6B]">
              <h3 className="font-bold text-[#1B3A6B] mb-4 text-sm">Statistiques</h3>
              <div className="grid grid-cols-2 gap-3">
                {[['4.9', 'Note'], ['127', 'Avis'], ['200+', 'Prestations'], ['3 ans', "D'expérience"]].map(([v, l]) => (
                  <div key={l} className="text-center bg-gray-50 rounded-lg p-3">
                    <p className="font-bold text-[#3A9E3A] text-lg">{v}</p>
                    <p className="text-xs text-gray-500">{l}</p>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}
