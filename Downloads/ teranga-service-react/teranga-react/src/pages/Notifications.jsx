import { useState } from 'react';
import Icon from '../components/Icons';

const notifs = [
  { type: 'confirm', icon: 'check', title: 'Réservation confirmée', desc: 'Votre réservation de ménage avec Mamadou Sow est confirmée pour le 30 juin à 9h.', time: 'Il y a 2h', read: false, color: 'text-green-600', bg: 'bg-green-50' },
  { type: 'message', icon: 'chat', title: 'Nouveau message', desc: 'Mamadou Sow vous a envoyé un message concernant votre réservation.', time: 'Il y a 3h', read: false, color: 'text-blue-600', bg: 'bg-blue-50' },
  { type: 'promo', icon: 'dollar', title: 'Offre spéciale', desc: '-20% sur votre prochaine réservation de cuisine à domicile ce weekend !', time: 'Hier', read: true, color: 'text-amber-600', bg: 'bg-amber-50' },
  { type: 'review', icon: 'star', title: 'Laissez un avis', desc: 'Votre prestation de plomberie est terminée. Évaluez Omar Badji pour aider la communauté.', time: 'Il y a 2 jours', read: true, color: 'text-purple-600', bg: 'bg-purple-50' },
  { type: 'info', icon: 'info', title: 'Mise à jour de compte', desc: 'Votre profil a été mis à jour avec succès. Les informations sont maintenant à jour.', time: 'Il y a 3 jours', read: true, color: 'text-gray-600', bg: 'bg-gray-50' },
];

export default function Notifications() {
  const [items, setItems] = useState(notifs);

  function markAllRead() {
    setItems(prev => prev.map(n => ({...n, read: true})));
  }

  function markRead(i) {
    setItems(prev => prev.map((n, j) => j === i ? {...n, read: true} : n));
  }

  const unread = items.filter(n => !n.read).length;

  return (
    <div className="max-w-3xl mx-auto px-5 py-10">
      <div className="flex items-center justify-between mb-7">
        <div>
          <h1 className="text-2xl font-bold text-[#1B3A6B] mb-0 flex items-center gap-2">
            <Icon name="bell" size={24} color="#1B3A6B" />
            Notifications
            {unread > 0 && (
              <span className="bg-red-500 text-white text-xs font-bold w-6 h-6 rounded-full flex items-center justify-center">{unread}</span>
            )}
          </h1>
          <p className="text-sm text-gray-400 mt-0.5">{unread} non lue{unread > 1 ? 's' : ''}</p>
        </div>
        {unread > 0 && (
          <button onClick={markAllRead} className="text-sm text-[#3A9E3A] font-semibold hover:underline flex items-center gap-1">
            <Icon name="check" size={14} color="#3A9E3A" />
            Tout marquer comme lu
          </button>
        )}
      </div>

      <div className="space-y-3">
        {items.map((n, i) => (
          <div
            key={i}
            onClick={() => markRead(i)}
            className={`card flex gap-4 p-5 cursor-pointer hover:shadow-md transition-all border-l-4 ${!n.read ? 'border-l-[#3A9E3A] bg-green-50/30' : 'border-l-transparent'}`}
          >
            <div className={`w-10 h-10 ${n.bg} rounded-full flex items-center justify-center flex-shrink-0 mt-0.5`}>
              <Icon name={n.icon} size={18} className={n.color} color="currentColor" />
            </div>
            <div className="flex-1 min-w-0">
              <div className="flex items-start justify-between gap-2">
                <h3 className={`text-sm font-bold ${!n.read ? 'text-[#1B3A6B]' : 'text-gray-700'}`}>{n.title}</h3>
                <span className="text-xs text-gray-400 flex-shrink-0">{n.time}</span>
              </div>
              <p className="text-sm text-gray-500 leading-relaxed mt-0.5">{n.desc}</p>
            </div>
            {!n.read && (
              <div className="w-2.5 h-2.5 bg-[#3A9E3A] rounded-full flex-shrink-0 mt-1.5" />
            )}
          </div>
        ))}
      </div>

      {items.every(n => n.read) && (
        <div className="text-center py-10 text-gray-400">
          <Icon name="bell" size={48} className="mx-auto mb-3 opacity-20" />
          <p>Toutes les notifications sont lues</p>
        </div>
      )}
    </div>
  );
}
