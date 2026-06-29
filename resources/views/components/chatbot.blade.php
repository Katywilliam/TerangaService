{{-- Chatbot flottant Teranga Service --}}
<div x-data="chatbotLogic()" style="position:fixed;bottom:24px;right:24px;z-index:999;font-family:'Poppins',sans-serif;">

    {{-- Bouton flottant --}}
    <button @click="open = !open"
            x-show="!open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-75"
            x-transition:enter-end="opacity-100 scale-100"
            style="background:#3A9E3A;color:white;width:58px;height:58px;border-radius:50%;border:none;cursor:pointer;box-shadow:0 4px 20px rgba(58,158,58,0.45);display:flex;align-items:center;justify-content:center;transition:transform .2s,box-shadow .2s;"
            @mouseenter="$el.style.transform='scale(1.1)';$el.style.boxShadow='0 6px 28px rgba(58,158,58,0.55)'"
            @mouseleave="$el.style.transform='scale(1)';$el.style.boxShadow='0 4px 20px rgba(58,158,58,0.45)'"
            title="Assistant Teranga" aria-label="Ouvrir le chatbot">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
        </svg>
        <span x-show="!open && unread > 0"
              style="position:absolute;top:-4px;right:-4px;background:#EF4444;color:white;font-size:10px;font-weight:700;width:18px;height:18px;border-radius:50%;display:flex;align-items:center;justify-content:center;border:2px solid white;"
              x-text="unread"></span>
    </button>

    {{-- Fenêtre chat --}}
    <div x-show="open"
         x-transition:enter="transition ease-out duration-250"
         x-transition:enter-start="opacity-0 translate-y-4 scale-95"
         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
         x-transition:leave="transition ease-in duration-180"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         style="position:absolute;bottom:70px;right:0;width:380px;max-width:92vw;background:white;border-radius:16px;box-shadow:0 20px 60px rgba(0,0,0,0.18);overflow:hidden;border:1px solid #E5E7EB;">

        {{-- En-tête --}}
        <div style="background:linear-gradient(135deg,#1B3A6B,#2A5298);color:white;padding:14px 18px;display:flex;justify-content:space-between;align-items:center;">
            <div style="display:flex;align-items:center;gap:12px;">
                <div style="width:40px;height:40px;border-radius:50%;background:#3A9E3A;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="9" r="1.5"/><circle cx="15.5" cy="9" r="1.5"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/>
                    </svg>
                </div>
                <div>
                    <p style="font-weight:600;font-size:14px;margin:0;">Assistant Teranga</p>
                    <div style="display:flex;align-items:center;gap:5px;font-size:11px;opacity:.85;margin-top:2px;">
                        <span style="width:7px;height:7px;background:#4ADE80;border-radius:50%;display:inline-block;animation:ts-pulse 1.5s infinite;"></span>
                        En ligne
                    </div>
                </div>
            </div>
            <button @click="open = false"
                    style="background:rgba(255,255,255,0.15);border:none;color:white;width:30px;height:30px;border-radius:50%;cursor:pointer;display:flex;align-items:center;justify-content:center;"
                    aria-label="Fermer">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            </button>
        </div>

        {{-- Zone messages --}}
        <div style="padding:14px 16px;height:300px;overflow-y:auto;background:#F8FAFC;display:flex;flex-direction:column;gap:10px;"
             x-ref="chatMessages">
            <template x-for="(msg, i) in messages" :key="i">
                <div :style="msg.sender==='bot' ? 'display:flex;gap:8px;align-items:flex-end;' : 'display:flex;justify-content:flex-end;'">
                    <div x-show="msg.sender==='bot'"
                         style="width:28px;height:28px;border-radius:50%;background:#1B3A6B;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-bottom:2px;">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="9" r="1.5"/><circle cx="15.5" cy="9" r="1.5"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/></svg>
                    </div>
                    <div :style="msg.sender==='bot'
                        ? 'background:white;border:1px solid #E5E7EB;padding:10px 14px;border-radius:12px 12px 12px 3px;max-width:80%;font-size:13px;line-height:1.6;box-shadow:0 1px 3px rgba(0,0,0,0.05);color:#374151;'
                        : 'background:#1B3A6B;color:white;padding:10px 14px;border-radius:12px 12px 3px 12px;max-width:80%;font-size:13px;line-height:1.5;'"
                         x-html="msg.text">
                    </div>
                </div>
            </template>

            {{-- Indicateur frappe --}}
            <div x-show="isTyping" style="display:flex;gap:8px;align-items:flex-end;">
                <div style="width:28px;height:28px;border-radius:50%;background:#1B3A6B;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="9" r="1.5"/><circle cx="15.5" cy="9" r="1.5"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/></svg>
                </div>
                <div style="background:white;border:1px solid #E5E7EB;padding:12px 16px;border-radius:12px 12px 12px 3px;display:flex;gap:5px;align-items:center;">
                    <span style="width:7px;height:7px;background:#9CA3AF;border-radius:50%;display:inline-block;animation:ts-bounce 1.2s infinite;"></span>
                    <span style="width:7px;height:7px;background:#9CA3AF;border-radius:50%;display:inline-block;animation:ts-bounce 1.2s infinite .2s;"></span>
                    <span style="width:7px;height:7px;background:#9CA3AF;border-radius:50%;display:inline-block;animation:ts-bounce 1.2s infinite .4s;"></span>
                </div>
            </div>
        </div>

        {{-- Suggestions --}}
        <div style="padding:8px 12px;background:#F3F4F6;border-top:1px solid #E5E7EB;display:flex;gap:6px;flex-wrap:wrap;">
            @foreach([
                ['label'=>'Plombier',  'q'=>'Je cherche un plombier',        'svg'=>'<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>'],
                ['label'=>'Ménage',    'q'=>'Je cherche une femme de ménage', 'svg'=>'<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>'],
                ['label'=>'Jardinage', 'q'=>'Je cherche un jardinier',        'svg'=>'<path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z"/>'],
                ['label'=>'Tarifs',    'q'=>'Quels sont vos tarifs ?',        'svg'=>'<line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>'],
                ['label'=>'Compte',    'q'=>'Comment créer un compte ?',      'svg'=>'<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/><line x1="19" y1="8" x2="19" y2="14"/><line x1="22" y1="11" x2="16" y2="11"/>'],
            ] as $s)
            <button onclick="window.dispatchEvent(new CustomEvent('quick-msg', {detail: '{{ $s['q'] }}'}))"
                    class="ts-chip"
                    style="background:white;border:1px solid #E5E7EB;border-radius:20px;padding:5px 12px;font-size:11px;cursor:pointer;display:flex;align-items:center;gap:5px;color:#374151;font-family:'Poppins',sans-serif;transition:all .15s;">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $s['svg'] !!}</svg>
                {{ $s['label'] }}
            </button>
            @endforeach
        </div>

        {{-- Input --}}
        <div style="padding:10px 14px;border-top:1px solid #E5E7EB;display:flex;gap:8px;background:white;">
            <input x-model="message"
                   @keydown.enter="sendMessage()"
                   @window:quick-msg.window="message = $event.detail; sendMessage()"
                   type="text"
                   placeholder="Écrivez votre message…"
                   style="flex:1;padding:9px 14px;border:1.5px solid #E5E7EB;border-radius:10px;outline:none;font-size:13px;font-family:'Poppins',sans-serif;transition:border-color .15s;color:#374151;"
                   @focus="$el.style.borderColor='#3A9E3A'"
                   @blur="$el.style.borderColor='#E5E7EB'"
                   aria-label="Votre message">
            <button @click="sendMessage()"
                    style="background:#3A9E3A;color:white;border:none;width:40px;height:40px;border-radius:10px;cursor:pointer;display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:background .15s;"
                    @mouseenter="$el.style.background='#2e802e'"
                    @mouseleave="$el.style.background='#3A9E3A'"
                    aria-label="Envoyer">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
            </button>
        </div>
    </div>
</div>

<style>
@keyframes ts-pulse  { 0%,100%{opacity:1} 50%{opacity:.3} }
@keyframes ts-bounce { 0%,80%,100%{transform:scale(.6);opacity:.4} 40%{transform:scale(1);opacity:1} }
.ts-chip:hover { background:#F0FDF4 !important; border-color:#3A9E3A !important; color:#166634 !important; }
</style>

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('chatbotLogic', () => ({
        open: false,
        message: '',
        isTyping: false,
        unread: 1,

        // Base URL pour les liens
        baseUrl: '/TerangaService/public',

        messages: [
            {
                text: 'Bonjour ! Je suis l\'<strong>Assistant Teranga Service</strong>.<br><br>Je peux vous aider à :<br>' +
                      '<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:inline;vertical-align:middle;margin-right:4px;"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg> Trouver un prestataire<br>' +
                      '<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:inline;vertical-align:middle;margin-right:4px;"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg> Connaître nos tarifs<br>' +
                      '<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#3A9E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:inline;vertical-align:middle;margin-right:4px;"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/><line x1="19" y1="8" x2="19" y2="14"/><line x1="22" y1="11" x2="16" y2="11"/></svg> Créer votre compte<br><br>' +
                      'Comment puis-je vous aider ?',
                sender: 'bot'
            }
        ],

        sendMessage() {
            if (this.message.trim() === '') return;
            this.unread = 0;
            this.messages.push({ text: this.escapeHtml(this.message), sender: 'user' });
            const userMsg = this.message.trim();
            this.message = '';
            this.isTyping = true;
            this.$nextTick(() => this.scrollToBottom());
            setTimeout(() => {
                this.isTyping = false;
                this.messages.push({ text: this.getBotResponse(userMsg), sender: 'bot' });
                this.$nextTick(() => this.scrollToBottom());
            }, 900);
        },

        escapeHtml(text) {
            return text.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;');
        },

        svgIcon(path, color) {
            color = color || '#3A9E3A';
            return '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="' + color + '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:inline;vertical-align:middle;margin-right:5px;">' + path + '</svg>';
        },

        makeLink(href, label) {
            return '<a href="' + this.baseUrl + href + '" style="color:#3A9E3A;text-decoration:underline;font-weight:600;">' + label + '</a>';
        },

        prestCard(nom, prix, note) {
            return '<div style="display:flex;align-items:center;gap:8px;padding:6px 0;border-bottom:1px solid #F3F4F6;">' +
                '<div style="width:28px;height:28px;border-radius:50%;background:#E0E7FF;display:flex;align-items:center;justify-content:center;flex-shrink:0;">' +
                '<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#4F46E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>' +
                '</div>' +
                '<div><p style="font-weight:600;font-size:12px;color:#1B3A6B;margin:0;">' + nom + '</p>' +
                '<p style="font-size:11px;color:#6B7280;margin:0;">' + prix + ' FCFA/h · ' +
                '<svg width="11" height="11" viewBox="0 0 24 24" fill="#FBBF24" stroke="#FBBF24" stroke-width="1" style="display:inline;vertical-align:middle;"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg> ' + note + '/5' +
                '</p></div></div>';
        },

        getBotResponse(msg) {
            const m = msg.toLowerCase();

            if (m.includes('plombier') || m.includes('plomberie')) {
                return this.svgIcon('<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>') +
                    '<strong>Plombiers disponibles à Dakar :</strong><br><br>' +
                    this.prestCard('Modou Fall', '5 000', '4.8') +
                    this.prestCard('Mamadou Diop', '4 500', '4.6') +
                    '<br>' + this.svgIcon('<polyline points="9 18 15 12 9 6"/>') +
                    this.makeLink('/prestataires', 'Voir tous les plombiers →');
            }

            if (m.includes('ménage') || m.includes('menage') || m.includes('nettoyage') || m.includes('femme de ménage')) {
                return this.svgIcon('<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>') +
                    '<strong>Professionnels du ménage :</strong><br><br>' +
                    this.prestCard('Fatou Diop', '3 500', '4.8') +
                    this.prestCard('Mariama Ba', '4 000', '4.7') +
                    '<br>' + this.svgIcon('<polyline points="9 18 15 12 9 6"/>') +
                    this.makeLink('/prestataires', 'Voir tous les prestataires →');
            }

            if (m.includes('jardin') || m.includes('jardinier')) {
                return this.svgIcon('<path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z"/>') +
                    '<strong>Jardiniers disponibles :</strong><br><br>' +
                    this.prestCard('Oumar Kane', '4 000', '4.7') +
                    this.prestCard('Aliou Ndiaye', '3 500', '4.5') +
                    '<br>' + this.svgIcon('<polyline points="9 18 15 12 9 6"/>') +
                    this.makeLink('/prestataires', 'Voir tous les jardiniers →');
            }

            if (m.includes('électricité') || m.includes('electricite') || m.includes('électricien')) {
                return this.svgIcon('<polyline points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>') +
                    '<strong>Électriciens disponibles :</strong><br><br>' +
                    this.prestCard('Ibrahima Sow', '5 500', '4.9') +
                    this.prestCard('Cheikh Diallo', '5 000', '4.6') +
                    '<br>' + this.svgIcon('<polyline points="9 18 15 12 9 6"/>') +
                    this.makeLink('/prestataires', 'Voir tous les électriciens →');
            }

            if (m.includes('tarif') || m.includes('prix') || m.includes('coût') || m.includes('cout')) {
                return this.svgIcon('<line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>') +
                    '<strong>Nos tarifs de base :</strong><br><br>' +
                    '<div style="background:#F9FAFB;border-radius:8px;padding:10px;font-size:12px;">' +
                    '<div style="display:flex;justify-content:space-between;padding:4px 0;border-bottom:1px solid #F3F4F6;"><span>Ménage</span><strong style="color:#3A9E3A;">3 500 FCFA/h</strong></div>' +
                    '<div style="display:flex;justify-content:space-between;padding:4px 0;border-bottom:1px solid #F3F4F6;"><span>Plomberie</span><strong style="color:#3A9E3A;">5 000 FCFA</strong></div>' +
                    '<div style="display:flex;justify-content:space-between;padding:4px 0;border-bottom:1px solid #F3F4F6;"><span>Électricité</span><strong style="color:#3A9E3A;">5 500 FCFA</strong></div>' +
                    '<div style="display:flex;justify-content:space-between;padding:4px 0;border-bottom:1px solid #F3F4F6;"><span>Jardinage</span><strong style="color:#3A9E3A;">4 000 FCFA/h</strong></div>' +
                    '<div style="display:flex;justify-content:space-between;padding:4px 0;"><span>Cuisine</span><strong style="color:#3A9E3A;">3 000 FCFA/repas</strong></div>' +
                    '</div><br>' +
                    this.svgIcon('<polyline points="9 18 15 12 9 6"/>') +
                    this.makeLink('/tarifs', 'Voir tous les tarifs →');
            }

            if (m.includes('bonjour') || m.includes('salut') || m.includes('hello') || m.includes('bonsoir')) {
                return this.svgIcon('<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>') +
                    'Bonjour ! Ravi de vous accueillir sur Teranga Service.<br><br>' +
                    'Comment puis-je vous aider ?<br>' +
                    this.svgIcon('<polyline points="9 18 15 12 9 6"/>') + ' Vous cherchez un prestataire ?<br>' +
                    this.svgIcon('<polyline points="9 18 15 12 9 6"/>') + ' Vous voulez connaître nos tarifs ?<br>' +
                    this.svgIcon('<polyline points="9 18 15 12 9 6"/>') + ' Besoin d\'aide pour votre compte ?';
            }

            if (m.includes('merci') || m.includes('super') || m.includes('parfait')) {
                return this.svgIcon('<polyline points="20 6 9 17 4 12"/>') +
                    'De rien, c\'est avec plaisir !<br><br>' +
                    this.svgIcon('<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>') +
                    'N\'hésitez pas si vous avez d\'autres questions. Bonne journée !';
            }

            if (m.includes('inscription') || m.includes('compte') || m.includes('créer') || m.includes('register')) {
                return this.svgIcon('<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/><line x1="19" y1="8" x2="19" y2="14"/><line x1="22" y1="11" x2="16" y2="11"/>') +
                    'Pour créer votre compte, c\'est simple :<br><br>' +
                    '<div style="counter-reset:step;">' +
                    '<div style="display:flex;gap:8px;align-items:center;margin-bottom:6px;"><div style="width:20px;height:20px;border-radius:50%;background:#1B3A6B;color:white;font-size:11px;font-weight:700;display:flex;align-items:center;justify-content:center;flex-shrink:0;">1</div> Cliquez sur <strong>Inscription</strong> dans le menu</div>' +
                    '<div style="display:flex;gap:8px;align-items:center;margin-bottom:6px;"><div style="width:20px;height:20px;border-radius:50%;background:#1B3A6B;color:white;font-size:11px;font-weight:700;display:flex;align-items:center;justify-content:center;flex-shrink:0;">2</div> Remplissez le formulaire</div>' +
                    '<div style="display:flex;gap:8px;align-items:center;"><div style="width:20px;height:20px;border-radius:50%;background:#1B3A6B;color:white;font-size:11px;font-weight:700;display:flex;align-items:center;justify-content:center;flex-shrink:0;">3</div> Confirmez votre email</div>' +
                    '</div><br>' +
                    this.svgIcon('<polyline points="9 18 15 12 9 6"/>') +
                    this.makeLink('/register', 'S\'inscrire maintenant →');
            }

            if (m.includes('paiement') || m.includes('payer') || m.includes('wave') || m.includes('orange money')) {
                return this.svgIcon('<rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>') +
                    'Nous acceptons plusieurs moyens de paiement :<br><br>' +
                    '<div style="display:flex;flex-direction:column;gap:8px;">' +
                    '<div style="display:flex;align-items:center;gap:8px;background:#FEF3C7;border-radius:8px;padding:8px 10px;">' +
                    this.svgIcon('<rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/>', '#F97316') +
                    '<span style="font-weight:600;font-size:12px;">Orange Money</span></div>' +
                    '<div style="display:flex;align-items:center;gap:8px;background:#DBEAFE;border-radius:8px;padding:8px 10px;">' +
                    this.svgIcon('<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>', '#2563EB') +
                    '<span style="font-weight:600;font-size:12px;">Wave</span></div>' +
                    '<div style="display:flex;align-items:center;gap:8px;background:#F3F4F6;border-radius:8px;padding:8px 10px;">' +
                    this.svgIcon('<rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/>', '#6B7280') +
                    '<span style="font-weight:600;font-size:12px;">Carte bancaire</span></div>' +
                    '</div><br>' +
                    this.svgIcon('<rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>') +
                    'Tous les paiements sont sécurisés.';
            }

            if (m.includes('prestataire') || m.includes('devenir')) {
                return this.svgIcon('<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>') +
                    'Vous souhaitez rejoindre notre réseau ? Excellent !<br><br>' +
                    '<div style="display:flex;gap:8px;align-items:center;margin-bottom:6px;"><div style="width:20px;height:20px;border-radius:50%;background:#3A9E3A;color:white;font-size:11px;font-weight:700;display:flex;align-items:center;justify-content:center;flex-shrink:0;">1</div> Cliquez sur <strong>Devenir prestataire</strong></div>' +
                    '<div style="display:flex;gap:8px;align-items:center;margin-bottom:6px;"><div style="width:20px;height:20px;border-radius:50%;background:#3A9E3A;color:white;font-size:11px;font-weight:700;display:flex;align-items:center;justify-content:center;flex-shrink:0;">2</div> Remplissez votre profil</div>' +
                    '<div style="display:flex;gap:8px;align-items:center;margin-bottom:12px;"><div style="width:20px;height:20px;border-radius:50%;background:#3A9E3A;color:white;font-size:11px;font-weight:700;display:flex;align-items:center;justify-content:center;flex-shrink:0;">3</div> Validation sous 24-48h</div>' +
                    this.svgIcon('<polyline points="9 18 15 12 9 6"/>') +
                    this.makeLink('/prestataire/register', 'Rejoindre le réseau →');
            }

            if (m.includes('contact') || m.includes('aide') || m.includes('support') || m.includes('problème')) {
                return this.svgIcon('<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>') +
                    'Notre équipe est disponible pour vous aider :<br><br>' +
                    '<div style="background:#F0FDF4;border-radius:8px;padding:10px;font-size:12px;">' +
                    '<div style="display:flex;align-items:center;gap:6px;margin-bottom:5px;">' +
                    this.svgIcon('<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>') +
                    'contact@terangaservice.sn</div>' +
                    '<div style="display:flex;align-items:center;gap:6px;margin-bottom:5px;">' +
                    this.svgIcon('<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07"/>') +
                    '+221 77 000 00 00</div>' +
                    '<div style="display:flex;align-items:center;gap:6px;">' +
                    this.svgIcon('<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>') +
                    'Lun–Sam, 8h–18h</div>' +
                    '</div><br>' +
                    this.svgIcon('<polyline points="9 18 15 12 9 6"/>') +
                    this.makeLink('/contact', 'Formulaire de contact →');
            }

            // Réponse par défaut
            return this.svgIcon('<circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>', '#F59E0B') +
                'Je n\'ai pas bien compris votre demande.<br><br>' +
                'Voici ce que je peux faire :<br>' +
                this.svgIcon('<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/>') + ' Trouver un <strong>prestataire</strong><br>' +
                this.svgIcon('<line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>') + ' Consulter les <strong>tarifs</strong><br>' +
                this.svgIcon('<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/><line x1="19" y1="8" x2="19" y2="14"/><line x1="22" y1="11" x2="16" y2="11"/>') + ' Créer un <strong>compte</strong><br>' +
                this.svgIcon('<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>') + ' <strong>Nous contacter</strong><br><br>' +
                'Posez-moi une question précise !';
        },

        scrollToBottom() {
            const el = this.$refs.chatMessages;
            if (el) el.scrollTop = el.scrollHeight;
        }
    }));
});
</script>