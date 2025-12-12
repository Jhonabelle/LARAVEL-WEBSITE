// resources/js/bootstrap.js
import axios from 'axios';
import _ from 'lodash';

// Make axios available globally
window.axios = axios;

// Set default headers
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Make lodash available if needed
window._ = _;

// Add any other global setups here
console.log('Bootstrap loaded');