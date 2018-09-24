function ready(fn) {
    if(document.readyState != 'loading') {
        fn();
    } else {
        document.addEventListener('DOMContentLoaded', fn);
    }
}

ready(function() {
    new window['MaterialChipInput'](document.getElementById('ingredientes'));
    new window['MaterialChipInput'](document.getElementById('nutrientes'));
	new window['MaterialChipInput'](document.getElementById('restricoes'));
	
    
});