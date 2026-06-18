<!-- Chatbot flottant avec Alpine.js -->
<div x-data="chatbotLogic()" style="position: fixed; bottom: 24px; right: 24px; z-index: 999;">
    
    <!-- Bouton du chatbot -->
    <button @click="open = !open" 
            x-show="!open"
            style="background: #3A9E3A; color: white; width: 60px; height: 60px; border-radius: 50%; border: none; font-size: 28px; cursor: pointer; box-shadow: 0 4px 12px rgba(0,0,0,0.3); transition: all 0.3s;">
        💬
    </button>
    
    <!-- Fenêtre du chatbot -->
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 scale-90"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-90"
         style="position: absolute; bottom: 80px; right: 0; width: 380px; max-width: 90vw; background: white; border-radius: 16px; box-shadow: 0 20px 60px rgba(0,0,0,0.3); overflow: hidden; border: 1px solid #E5E7EB;">
        
        <!-- En-tête -->
        <div style="background: linear-gradient(135deg, #1B3A6B, #1B3A6B 90%); color: white; padding: 16px 20px; display: flex; justify-content: space-between; align-items: center;">
            <div style="display: flex; align-items: center; gap: 10px;">
                <div style="background: #3A9E3A; width: 36px; height: 36px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 18px;">
                    🤖
                </div>
                <div>
                    <span style="font-weight: bold; font-size: 16px;">Assistant Teranga</span>
                    <div style="display: flex; align-items: center; gap: 4px; font-size: 12px; opacity: 0.8;">
                        <span style="display: inline-block; width: 8px; height: 8px; background: #3A9E3A; border-radius: 50%; animation: pulse 1.5s infinite;"></span>
                        En ligne
                    </div>
                </div>
            </div>
            <button @click="open = false" style="background: none; border: none; color: white; font-size: 20px; cursor: pointer; opacity: 0.8; hover:opacity: 1;">
                ✕
            </button>
        </div>
        
        <!-- Messages -->
        <div style="padding: 16px 20px; height: 320px; overflow-y: auto; background: #F9FAFB;" 
             x-ref="chatMessages">
            <template x-for="(msg, index) in messages" :key="index">
                <div :style="msg.sender === 'bot' ? 'text-align: left;' : 'text-align: right;'">
                    <div :style="msg.sender === 'bot' ? 
                        'display: inline-block; background: white; padding: 10px 14px; border-radius: 12px 12px 12px 4px; margin-bottom: 8px; max-width: 85%; box-shadow: 0 2px 4px rgba(0,0,0,0.05);' : 
                        'display: inline-block; background: #1B3A6B; color: white; padding: 10px 14px; border-radius: 12px 12px 4px 12px; margin-bottom: 8px; max-width: 85%;'"
                        x-html="msg.text">
                    </div>
                </div>
            </template>
            
            <!-- Indicateur de frappe -->
            <div x-show="isTyping" style="text-align: left;">
                <div style="display: inline-block; background: white; padding: 10px 14px; border-radius: 12px 12px 12px 4px; margin-bottom: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                    <span style="display: inline-block; width: 8px; height: 8px; background: #D1D5DB; border-radius: 50%; animation: bounce 1.4s infinite;"></span>
                    <span style="display: inline-block; width: 8px; height: 8px; background: #D1D5DB; border-radius: 50%; animation: bounce 1.4s infinite 0.2s;"></span>
                    <span style="display: inline-block; width: 8px; height: 8px; background: #D1D5DB; border-radius: 50%; animation: bounce 1.4s infinite 0.4s;"></span>
                </div>
            </div>
        </div>
        
        <!-- Suggestions rapides -->
        <div style="padding: 8px 16px; background: #F3F4F6; display: flex; gap: 6px; flex-wrap: wrap; border-top: 1px solid #E5E7EB;">
            <button @click="sendQuickMessage('🔍 Je cherche un plombier')" 
                    style="background: white; border: 1px solid #D1D5DB; border-radius: 20px; padding: 4px 12px; font-size: 12px; cursor: pointer; transition: 0.2s;">
                🔍 Plombier
            </button>
            <button @click="sendQuickMessage('🔍 Je cherche une femme de ménage')" 
                    style="background: white; border: 1px solid #D1D5DB; border-radius: 20px; padding: 4px 12px; font-size: 12px; cursor: pointer; transition: 0.2s;">
                🧹 Ménage
            </button>
            <button @click="sendQuickMessage('🔍 Je cherche un jardinier')" 
                    style="background: white; border: 1px solid #D1D5DB; border-radius: 20px; padding: 4px 12px; font-size: 12px; cursor: pointer; transition: 0.2s;">
                🌿 Jardinage
            </button>
            <button @click="sendQuickMessage('💰 Quels sont vos tarifs ?')" 
                    style="background: white; border: 1px solid #D1D5DB; border-radius: 20px; padding: 4px 12px; font-size: 12px; cursor: pointer; transition: 0.2s;">
                💰 Tarifs
            </button>
        </div>
        
        <!-- Input -->
        <div style="padding: 12px 16px; border-top: 1px solid #E5E7EB; display: flex; gap: 8px; background: white;">
            <input x-model="message" 
                   @keydown.enter="sendMessage()"
                   type="text" 
                   placeholder="Écrivez votre message..." 
                   style="flex: 1; padding: 10px 14px; border: 2px solid #E5E7EB; border-radius: 10px; outline: none; font-size: 14px; transition: 0.2s;"
                   @focus="event.target.style.borderColor='#3A9E3A'"
                   @blur="event.target.style.borderColor='#E5E7EB'">
            <button @click="sendMessage()" 
                    style="background: #3A9E3A; color: white; border: none; padding: 10px 18px; border-radius: 10px; cursor: pointer; font-size: 18px; transition: 0.2s;">
                ➤
            </button>
        </div>
    </div>
</div>

<style>
    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.3; }
    }
    
    @keyframes bounce {
        0%, 80%, 100% { transform: scale(0.6); opacity: 0.4; }
        40% { transform: scale(1); opacity: 1; }
    }
</style>

<!-- FONCTION CHATBOT EN JAVASCRIPT -->
<script>
    function chatbotLogic() {
        return {
            open: false,
            message: '',
            isTyping: false,
            messages: [
                { text: '👋 Bonjour ! Je suis l\'assistant Teranga Service. Comment puis-je vous aider ?', sender: 'bot' }
            ],
            
            sendMessage() {
                if (this.message.trim() === '') return;
                
                // Ajouter le message de l'utilisateur
                this.messages.push({ text: this.message, sender: 'user' });
                const userMessage = this.message;
                this.message = '';
                
                // Afficher l'indicateur de frappe
                this.isTyping = true;
                
                // Défiler vers le bas
                this.$nextTick(() => {
                    this.scrollToBottom();
                });
                
                // Réponse du bot (simulée)
                setTimeout(() => {
                    this.isTyping = false;
                    const response = this.getBotResponse(userMessage);
                    this.messages.push({ text: response, sender: 'bot' });
                    this.$nextTick(() => {
                        this.scrollToBottom();
                    });
                }, 800);
            },
            
            sendQuickMessage(text) {
                this.message = text;
                this.sendMessage();
            },
            
            getBotResponse(message) {
                const msg = message.toLowerCase();
                
                if (msg.includes('plombier') || msg.includes('plomberie')) {
                    return '🔧 Parfait ! Voici nos plombiers disponibles à Dakar :<br><br>✅ <b>Modou Fall</b> - 5 000 FCFA/h (4.8/5)<br>✅ <b>Mamadou Diop</b> - 4 500 FCFA/h (4.6/5)<br><br>📌 <a href="/prestataires" style="color: #3A9E3A; text-decoration: underline;">Voir tous les plombiers →</a>';
                }
                
                if (msg.includes('ménage') || msg.includes('nettoyage') || msg.includes('femme de ménage')) {
                    return '🧹 Super ! Voici nos professionnels du ménage :<br><br>✅ <b>Fatou Diop</b> - 3 500 FCFA/h (4.8/5)<br>✅ <b>Mariama Ba</b> - 4 000 FCFA/h (4.7/5)<br><br>📌 <a href="/prestataires" style="color: #3A9E3A; text-decoration: underline;">Voir tous les prestataires →</a>';
                }
                
                if (msg.includes('jardin') || msg.includes('jardinier')) {
                    return '🌿 Excellent choix ! Voici nos jardiniers :<br><br>✅ <b>Oumar Kane</b> - 4 000 FCFA/h (4.7/5)<br>✅ <b>Aliou Ndiaye</b> - 3 500 FCFA/h (4.5/5)<br><br>📌 <a href="/prestataires" style="color: #3A9E3A; text-decoration: underline;">Voir tous les jardiniers →</a>';
                }
                
                if (msg.includes('tarif') || msg.includes('prix') || msg.includes('coût')) {
                    return '💰 Voici nos tarifs :<br><br>• 🧹 Ménage : 3 500 FCFA/h<br>• 🔧 Plomberie : 5 000 FCFA/intervention<br>• ⚡ Électricité : 5 500 FCFA/intervention<br>• 🌿 Jardinage : 4 000 FCFA/h<br>• 👶 Garde d\'enfants : 2 500 FCFA/h<br>• 🍳 Cuisine : 3 000 FCFA/repas<br><br>📌 <a href="/tarifs" style="color: #3A9E3A; text-decoration: underline;">Voir tous les tarifs →</a>';
                }
                
                if (msg.includes('bonjour') || msg.includes('salut') || msg.includes('hello')) {
                    return '👋 Bonjour ! Comment puis-je vous aider aujourd\'hui ? Vous cherchez un service particulier ?';
                }
                
                if (msg.includes('merci')) {
                    return '🙏 De rien ! N\'hésitez pas si vous avez d\'autres questions. Bonne journée ! 😊';
                }
                
                if (msg.includes('inscription') || msg.includes('compte') || msg.includes('créer')) {
                    return '📝 Pour créer un compte, c\'est très simple :<br><br>1. Cliquez sur "Inscription" dans le menu<br>2. Remplissez le formulaire<br>3. Confirmez votre email<br><br>📌 <a href="/register" style="color: #3A9E3A; text-decoration: underline;">S\'inscrire maintenant →</a>';
                }
                
                if (msg.includes('paiement') || msg.includes('payer') || msg.includes('wave') || msg.includes('orange')) {
                    return '💳 Nous acceptons plusieurs moyens de paiement :<br><br>• 📱 Wave<br>• 📱 Orange Money<br>• 💳 Carte bancaire<br><br>Tous les paiements sont sécurisés et protégés.';
                }
                
                // Réponse par défaut
                return '🤔 Je n\'ai pas bien compris votre demande. Voici ce que je peux faire pour vous :<br><br>• 🔍 Trouver un prestataire<br>• 💰 Voir les tarifs<br>• 📝 S\'inscrire<br>• 💳 Infos paiement<br><br>Posez-moi une question précise !';
            },
            
            scrollToBottom() {
                const chat = this.$refs.chatMessages;
                if (chat) {
                    chat.scrollTop = chat.scrollHeight;
                }
            }
        };
    }
</script>