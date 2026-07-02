import { useState } from 'react';
import { Link } from 'react-router-dom';
import Icon from '../components/Icons';

const services = ['Ménage complet', 'Plomberie', 'Cuisine à domicile', 'Électricité', 'Climatisation', 'Informatique'];

export default function Reservation() {
  const [step, setStep] = useState(1);
  const [form, setForm] = useState({ service: '', date: '', heure: '', adresse: '', note: '' });
  const u = k => e => setForm(p => ({...p, [k]: e.target.value}));

  if (step === 3) {
    return (
      <div className="min-h-[70vh] flex items-center justify-center px-5 py-12">
        <div className="text-center max-w-md">
          <div className="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
            <Icon name="check" size={40} color="#16A34A" />
          </div>
          <h2 className="text-2xl font-bold text-[#1B3A6B] mb-2">Réservation confirmée !</h2>
          <p className="text-gray-500 mb-6">Votre demande de <strong>{form.service}</strong> a été envoyée. Vous serez contacté dans les plus brefs délais.</p>
          <div className="bg-gray-50 rounded-xl p-5 text-left space-y-2 mb-6">
            {[['Service', form.service], ['Date', form.date], ['Heure', form.heure], ['Adresse', form.adresse]].map(([k, v]) => v && (
              <div key={k} className="flex justify-between text-sm">
                <span className="text-gray-500">{k}</span>
                <span className="font-semibold text-[#1B3A6B]">{v}</span>
              </div>
            ))}
          </div>
          <Link to="/" className="btn-primary">
            <Icon name="home" size={16} color="white" />
            Retour à l'accueil
          </Link>
        </div>
      </div>
    );
  }

  return (
    <div className="max-w-2xl mx-auto px-5 py-12">
      
      <div className="flex items-center gap-2 mb-10">
        {[1, 2].map(s => (
          <div key={s} className="flex items-center gap-2">
            <div className={`w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold transition-all ${step >= s ? 'bg-[#3A9E3A] text-white' : 'bg-gray-200 text-gray-400'}`}>
              {step > s ? <Icon name="check" size={14} color="white" /> : s}
            </div>
            {s < 2 && <div className={`flex-1 h-0.5 transition-all ${step > s ? 'bg-[#3A9E3A]' : 'bg-gray-200'}`} style={{ width: 80 }} />}
          </div>
        ))}
        <div className="ml-auto text-sm text-gray-400">Étape {step}/2</div>
      </div>

      <div className="card p-8 border-t-4 border-[#3A9E3A] shadow-lg">
        {step === 1 ? (
          <>
            <h2 className="text-xl font-bold text-[#1B3A6B] mb-6">Choisissez votre service</h2>
            <div className="space-y-4">
              <div>
                <label className="form-label">Type de service</label>
                <div className="grid grid-cols-2 gap-3">
                  {services.map(s => (
                    <label key={s} className={`flex items-center gap-2 px-4 py-3 border-2 rounded-xl cursor-pointer transition-all text-sm ${form.service === s ? 'border-[#3A9E3A] bg-green-50 text-[#3A9E3A] font-semibold' : 'border-gray-200 text-gray-600 hover:border-gray-300'}`}>
                      <input type="radio" name="service" value={s} checked={form.service === s} onChange={u('service')} className="sr-only" />
                      {s}
                    </label>
                  ))}
                </div>
              </div>
              <div>
                <label className="form-label">Adresse</label>
                <div className="relative">
                  <span className="absolute left-3 top-1/2 -translate-y-1/2"><Icon name="mappin" size={16} color="#9CA3AF" /></span>
                  <input type="text" className="form-input pl-10" placeholder="Votre adresse complète" value={form.adresse} onChange={u('adresse')} />
                </div>
              </div>
              <div>
                <label className="form-label">Note ou instructions</label>
                <textarea className="form-input resize-none" rows={3} placeholder="Instructions particulières..." value={form.note} onChange={u('note')} />
              </div>
              <button disabled={!form.service || !form.adresse} onClick={() => setStep(2)} className="w-full btn-primary justify-center py-3 disabled:opacity-50 disabled:cursor-not-allowed">
                Continuer <Icon name="arrowright" size={16} color="white" />
              </button>
            </div>
          </>
        ) : (
          <>
            <h2 className="text-xl font-bold text-[#1B3A6B] mb-6">Choisissez la date et l'heure</h2>
            <div className="space-y-4">
              <div>
                <label className="form-label">Date souhaitée</label>
                <div className="relative">
                  <span className="absolute left-3 top-1/2 -translate-y-1/2"><Icon name="calendar" size={16} color="#9CA3AF" /></span>
                  <input type="date" className="form-input pl-10" value={form.date} onChange={u('date')} />
                </div>
              </div>
              <div>
                <label className="form-label">Heure souhaitée</label>
                <div className="grid grid-cols-3 gap-2">
                  {['08:00', '09:00', '10:00', '11:00', '14:00', '15:00', '16:00', '17:00'].map(h => (
                    <label key={h} className={`flex items-center justify-center py-2.5 border-2 rounded-lg cursor-pointer text-sm font-medium transition-all ${form.heure === h ? 'border-[#3A9E3A] bg-green-50 text-[#3A9E3A]' : 'border-gray-200 text-gray-600 hover:border-gray-300'}`}>
                      <input type="radio" name="heure" value={h} checked={form.heure === h} onChange={u('heure')} className="sr-only" />
                      {h}
                    </label>
                  ))}
                </div>
              </div>

              
              {form.date && form.heure && (
                <div className="bg-green-50 border border-green-200 rounded-xl p-4">
                  <h3 className="font-semibold text-[#1B3A6B] text-sm mb-2">Récapitulatif</h3>
                  <div className="space-y-1">
                    {[['Service', form.service], ['Adresse', form.adresse], ['Date', form.date], ['Heure', form.heure]].map(([k, v]) => (
                      <div key={k} className="flex justify-between text-sm">
                        <span className="text-gray-500">{k}</span>
                        <span className="font-medium text-[#1B3A6B]">{v}</span>
                      </div>
                    ))}
                  </div>
                </div>
              )}

              <div className="flex gap-3">
                <button onClick={() => setStep(1)} className="flex-1 border-2 border-gray-200 text-gray-600 py-3 rounded-xl font-semibold text-sm hover:bg-gray-50 transition-all">
                  Retour
                </button>
                <button disabled={!form.date || !form.heure} onClick={() => setStep(3)} className="flex-1 btn-primary justify-center py-3 disabled:opacity-50 disabled:cursor-not-allowed">
                  Confirmer <Icon name="check" size={16} color="white" />
                </button>
              </div>
            </div>
          </>
        )}
      </div>
    </div>
  );
}
