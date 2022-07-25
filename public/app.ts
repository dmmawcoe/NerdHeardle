import { createApp } from 'vue'
import Game from '../resources/js/components/Game.vue'
import '../resources/js/components/game.css'


// resize for scaling the board size
window.addEventListener('resize', onResize)
// set size on startup
onResize()

function onResize() {
    // get actual vh on mobile
    document.body.style.setProperty('--vh', window.innerHeight + 'px')
}

createApp(Game).mount('#app')
