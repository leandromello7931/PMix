
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */


require ("material-components-web/index");
 import {MDCRipple} from '@material/ripple';
 import {MDCList} from "@material/list";
 import {MDCDrawer} from "@material/drawer";
 import {MDCTopAppBar} from "@material/top-app-bar";
// import {MDCTextField} from '@material/textfield';
// import {MDCChipSet} from '@material/chips';
// import {MDCFloatingLabel} from '@material/floating-label';

// // const floatingLabel = new MDCFloatingLabel(document.querySelector('.mdc-floating-label'));
// // const ripple = new MDCRipple(document.querySelector('.mdc-button')); 
// const textFieldElements = [].slice.call(document.querySelectorAll('.mdc-text-field'));
// textFieldElements.forEach((textFieldEl) => {
//   new MDCTextField(textFieldEl);
// });


const topAppBar = MDCTopAppBar.attachTo(document.getElementById('app-bar'));
topAppBar.setScrollTarget(document.getElementById('main-content'));
topAppBar.listen('MDCTopAppBar:nav', () => {
    drawer.open = !drawer.open;
});

const ripple = [].slice.call(document.querySelectorAll('.mdc-button'));
ripple.forEach((rippleEl) => {
  new MDCRipple(rippleEl);
});

const list = MDCList.attachTo(document.querySelector('.mdc-list'));
list.wrapFocus = true;

const drawer = MDCDrawer.attachTo(document.querySelector('.mdc-drawer'));

// // const chipSet = new MDCChipSet(document.querySelector('.mdc-chip-set'));

// const chipSet = [].slice.call(document.querySelectorAll('.mdc-chip-set'));
// chipSet.forEach((chipSetEl) => {
//   new MDCChipSet(chipSetEl);
// });
