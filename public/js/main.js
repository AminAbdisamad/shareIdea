/* responsive sidebar menu */
const elem = document.querySelector('.sidenav');
M.Sidenav.init(elem, {});

/* Flash messages should disappear after 5s */
const msg = document.querySelector('#msg-flash');
setTimeout(() => { msg.remove(); }, 5000);

