// import './bootstrap';

import Alpine from 'alpinejs'
import morph from '@alpinejs/morph'
import htmx from 'htmx.org'

window.htmx = htmx
window.Alpine = Alpine
Alpine.plugin(morph)

Alpine.start()
