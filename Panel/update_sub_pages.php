
<html>
<head>
    <title>لوحة التحكم</title>
    <link rel="stylesheet" href="css/main.css">
    
    

<meta charset="utf-8">
<style>
    
    /* RESET RULES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
@import url("https://fonts.googleapis.com/css?family=Lato:400,700&display=swap");

:root {
  --page-header-bgColor: #242e42;
  --page-header-bgColor-hover: #1d2636;
  --page-header-txtColor: #dde9f8;
  --page-header-headingColor: #7889a4;
  --page-header-width: 220px;
  --page-content-bgColor: #f0f1f6;
  --page-content-txtColor: #171616;
  --page-content-blockColor: #fff;
  --white: #fff;
  --black: #333;
  --blue: #00b9eb;
  --red: #ec1848;
  --border-radius: 4px;
  --box-shadow: 0 0 10px -2px rgba(0, 0, 0, 0.075);
  --switch-bgLightModeColor: #87cefa;
  --switch-sunColor: gold;
  --switch-moonColor: #f4f4f4;
  --switch-bgDarkModeColor: #1f1f27;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

ul {
  list-style: none;
}

a,
button {
  color: inherit;
}

a {
  text-decoration: none;
}

button {
  background: none;
  cursor: pointer;
}

input {
  -webkit-appearance: none;
}

[type="checkbox"] {
  position: absolute;
  left: -9999px;
}

label {
  cursor: pointer;
}

button,
input {
  border: none;
}

svg {
  display: block;
}

body {
  font: 16px/1.5 "Lato", sans-serif;
}


/* HEADER STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.page-header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  overflow: auto;
  padding-top: 20px;
  width: var(--page-header-width);
  color: var(--page-header-txtColor);
  background: var(--page-header-bgColor);
}

/*In case you prefer an absolutely positioned header that covers the full page height, add these styles*/
/*body {
  position: relative;
}

.page-header {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
}*/

/*remove these styles*/
/*.page-header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  overflow: auto;
}*/

.page-header nav {
  display: flex;
  flex-direction: column;
  min-height: 100%;
}

.page-header .logo {
  display: block;
  margin: 0 15px;
}

.page-header .logo svg {
  max-width: 120px;
  fill: var(--white);
}

.page-header .toggle-mob-menu {
  display: none;
  margin-left: 5px;
  padding: 4px;
  background: var(--page-content-blockColor);
  border-radius: var(--border-radius);
}

.page-header .toggle-mob-menu svg {
  fill: var(--black);
  transition: transform 0.2s;
}

.page-header .admin-menu {
  display: flex;
  flex-direction: column;
  flex-grow: 1;
  margin-top: 35px;
}

.page-header .admin-menu li:nth-last-child(2) {
  margin-bottom: 35px;
}

.page-header .admin-menu li:last-child {
  margin-top: auto;
  margin-bottom: 20px;
}

.page-header .admin-menu li > * {
  width: 100%;
  padding: 12px 15px;
}

.page-header .admin-menu .switcher {
  display: inline-block;
  width: auto;
}

.page-header .admin-menu .menu-heading h3 {
  text-transform: uppercase;
  letter-spacing: 0.15em;
  font-size: 12px;
  margin-top: 12px;
  color: var(--page-header-headingColor);
}

.page-header .admin-menu svg {
  width: 20px;
  height: 20px;
  fill: var(--page-header-txtColor);
  margin-right: 10px;
}

.page-header .admin-menu a,
.page-header .admin-menu button {
  display: flex;
  align-items: center;
  font-size: 0.9rem;
}

.page-header .admin-menu a:hover,
.page-header .admin-menu a:focus,
.page-header .admin-menu button:hover,
.page-header .admin-menu button:focus {
  background: var(--page-header-bgColor-hover);
  color: var(--blue);
  outline: none;
}

.page-header .admin-menu a:hover svg,
.page-header .admin-menu a:focus svg,
.page-header .admin-menu button:hover svg,
.page-header .admin-menu button:focus svg {
  fill: var(--blue);
}


/* PAGE CONTENT STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.page-content {
  position: relative;
  left: var(--page-header-width);
  width: calc(100% - var(--page-header-width));
  min-height: 100vh;
  padding: 30px;
  color: var(--page-content-txtColor);
  background: var(--page-content-bgColor);
}

.search-and-user {
  display: grid;
  grid-template-columns: 1fr auto;
  grid-column-gap: 50px;
  align-items: center;
  background: var(--page-content-bgColor);
  margin-bottom: 30px;
}

.search-and-user form {
  position: relative;
}

.search-and-user [type="search"] {
  width: 100%;
  height: 50px;
  font-size: 1.5rem;
  padding-left: 15px;
  background: var(--page-content-blockColor);
  color: var(--white);
  border-radius: var(--border-radius);
  box-shadow: var(--box-shadow);
}

.search-and-user ::placeholder {
  color: var(--page-content-txtColor);
}

.search-and-user form svg {
  width: 26px;
  height: 26px;
  fill: var(--page-content-txtColor);
}

.search-and-user form button {
  position: absolute;
  top: 50%;
  right: 15px;
  transform: translateY(-50%);
}

.search-and-user .admin-profile {
  display: flex;
  align-items: center;
}

.search-and-user .admin-profile .greeting {
  margin: 0 10px 0 20px;
}

.search-and-user .admin-profile svg {
  width: 30px;
  height: 30px;
}

.search-and-user .admin-profile .notifications {
  position: relative;
}

.search-and-user .admin-profile .badge {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: -10px;
  right: -3px;
  width: 18px;
  height: 18px;
  border-radius: 50%;
  font-size: 10px;
  color: var(--white);
  background: var(--red);
}

.page-content .grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 30px;
}

.page-content .grid > article {
  display: flex;
  height: 300px;
  background: var(--page-content-blockColor);
  border-radius: var(--border-radius);
  box-shadow: var(--box-shadow);
}

.page-content .grid > article:first-child,
.page-content .grid > article:last-child {
  grid-column: 1 / -1;
}


/* MQ RULES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
@media screen and (max-width: 767px) {
  .page-header,
  .page-content {
    position: static;
    width: 100%;
  }

  .page-header {
    padding: 10px;
  }

  .page-header nav {
    flex-direction: row;
  }

  .page-header .logo {
    margin: 0;
  }

  .page-header .logo svg {
    width: 83px;
    height: 35px;
  }

  .page-header .toggle-mob-menu {
    display: block;
  }

  .page-header .admin-menu {
    position: absolute;
    left: 98px;
    top: 57px;
    margin-top: 0;
    z-index: 2;
    border-radius: var(--border-radius);
    background: var(--page-header-bgColor);
    visibility: hidden;
    opacity: 0;
    transform: scale(0.95);
    transition: all 0.2s;
  }

  .page-header .admin-menu li:nth-last-child(2) {
    margin-bottom: 12px;
  }

  .page-header .admin-menu li:last-child button,
  .search-and-user .admin-profile .greeting {
    display: none;
  }

  .page-content {
    min-height: 0;
    padding: 10px;
  }

  .page-content .grid {
    grid-gap: 10px;
  }

  .search-and-user {
    position: absolute;
    left: 131px;
    top: 10px;
    padding: 0;
    grid-column-gap: 5px;
    width: calc(100% - 141px);
    border-radius: var(--border-radius);
    background: transparent;
  }

  .search-and-user [type="search"] {
    font-size: 1rem;
    height: 35px;
  }

  .search-and-user form svg {
    width: 18px;
    height: 18px;
  }

  .search-and-user .admin-profile svg {
    fill: var(--white);
  }
}

@media screen and (max-width: 400px) {
  .page-content .grid > article {
    grid-column: 1 / -1;
  }
}


/* BODY CLASSES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.mob-menu-opened .toggle-mob-menu svg {
  transform: rotate(180deg);
}

.mob-menu-opened .page-header .admin-menu {
  transform: scale(1);
  visibility: visible;
  opacity: 1;
}

@media screen and (min-width: 768px) {
  .collapsed .page-header {
    width: 40px;
  }

  .collapsed .page-header .admin-menu li > * {
    padding: 10px;
  }

  .collapsed .page-header .logo,
  .collapsed .page-header .admin-menu span,
  .collapsed .page-header .admin-menu .menu-heading {
    display: none;
  }

  .collapsed .page-header .admin-menu svg {
    margin-right: 0;
  }

  .collapsed .page-header .collapse-btn svg {
    transform: rotate(180deg);
  }

  .collapsed .page-content {
    left: 40px;
    width: calc(100% - 40px);
  }
}


/* SWITCH STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.switch label {
  display: grid;
  grid-template-columns: auto auto;
  grid-column-gap: 10px;
  align-items: center;
  justify-content: flex-start;
}

.switch span:first-child {
  position: relative;
  width: 50px;
  height: 26px;
  border-radius: 15px;
  box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.4);
  background: var(--switch-bgLightModeColor);
  transition: all 0.3s;
}

.switch span:first-child::before,
.switch span:first-child::after {
  content: "";
  position: absolute;
  border-radius: 50%;
}

.switch span:first-child::before {
  top: 1px;
  left: 1px;
  width: 24px;
  height: 24px;
  background: var(--white);
  z-index: 1;
  transition: transform 0.3s;
}

.switch span:first-child::after {
  top: 50%;
  right: 8px;
  width: 10px;
  height: 10px;
  transform: translateY(-50%);
  background: var(--switch-sunColor);
  box-shadow: 0 0 4px 2px #ffdb1a;
}

.switch [type="checkbox"]:checked + label span:first-child {
  background: var(--switch-bgDarkModeColor);
}

.switch [type="checkbox"]:focus + label span:first-child {
  box-shadow: 0 3px 5px rgba(255, 255, 255, 0.25);
}

.switch [type="checkbox"]:checked + label span:first-child::before {
  transform: translateX(24px);
}

.switch [type="checkbox"]:checked + label span:first-child::after {
  left: 12px;
  width: 15px;
  height: 15px;
  background: transparent;
  box-shadow: -2px -5px 0 var(--switch-moonColor);
  transform: translateY(-50%) rotate(-72deg);
}


/* LIGHT MODE STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.light-mode {
  --page-header-bgColor: #f1efec;
  --page-header-bgColor-hover: #b9e4e0;
  --page-header-txtColor: #2c303a;
  --page-header-headingColor: #979595;
  --page-content-bgColor: #fff;
  --box-shadow: 0 0 10px -2px rgba(0, 0, 0, 0.25);
}

.light-mode .page-header .admin-menu a:hover,
.light-mode .page-header .admin-menu a:focus,
.light-mode .page-header .admin-menu button:hover,
.light-mode .page-header .admin-menu button:focus {
  color: var(--black);
}

.light-mode .page-header .logo svg,
.light-mode .page-header .admin-menu a:hover svg,
.light-mode .page-header .admin-menu a:focus svg,
.light-mode .page-header .admin-menu button:hover svg,
.light-mode .page-header .admin-menu button:focus svg {
  fill: var(--black);
}

.light-mode .switch [type="checkbox"]:focus + label span:first-child {
  box-shadow: 0 3px 5px rgba(0, 0, 0, 0.25);
}

@media screen and (max-width: 767px) {
  .light-mode .search-and-user .admin-profile svg {
    fill: var(--black);
  }
}


/* FOOTER
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.page-footer {
  font-size: 1rem;
  display: flex;
  align-items: center;
  justify-content: flex-end;
  margin-top: 10px;
}

.page-footer a {
  margin-left: 4px;
}




h1{
  font-weight: 400;
}
a{
  color: inherit;
}
p{
  margin-top: .7em;
}
.warning{
  color: rgb(62,148,236);
}
.st_viewport{
  max-height: 500px;
  overflow: auto;
}

[data-table_id="1"]{
  background-color: rgb(255,115,0);
}
[data-table_id="2"]{
  background-color: rgb(61,53,39);
  color: rgb(220,220,220);
}
[data-table_id="3"]{
  background-color: rgba(168,189,4, .8);
}

._rank{
  min-width: 200px;
}
._id{
  min-width: 200px;
}
._name{
  min-width: 200px;
}
._surname{
  min-width: 200px;
}
._year{
  min-width: 200px;
}
._section{
  min-width: 200px;
}

pre{
  overflow: auto;
}

/** Sticky table styles **/
.st_viewport{
  background-color:#242e42;
  color:white;
  margin: 20px 0;
  width:400px;
}
/* ###  Table wrap */
.st_wrap_table{
  
}
/* ##   header */
.st_table_header{
  position: -webkit-sticky;
  position: sticky;
  top: 0px;
  z-index: 1;
  background-color: rgb(27,30,36);
  color: rgb(220,220,220);
  width:450px;
}
.st_table_header h2{
  font-weight: 400;
  margin: 0 20px;
  padding: 20px 0 0;
}
.st_table_header .st_row{
  color: rgba(220,220,220, .7);
}
.st_table_header .st_column{
  
}
/* ##  table */
.st_table{
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
}
/* #   row */
.st_row{
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  margin: 0;
}
.st_table .st_row:nth-child(even){
  background-color: rgba(0,0,0, .1);
   width:450px;
}
/* #   column */
.st_column{
  padding: 10px 20px;
}



.glow-on-hover {
    width: 50px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background-color: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000;
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}






</style>

</head>

<svg style="display:none;">
  
  <symbol id="down" viewBox="0 0 16 16">
    <polygon points="3.81 4.38 8 8.57 12.19 4.38 13.71 5.91 8 11.62 2.29 5.91 3.81 4.38" />
  </symbol>
  <symbol id="users" viewBox="0 0 16 16">
    <path d="M8,0a8,8,0,1,0,8,8A8,8,0,0,0,8,0ZM8,15a7,7,0,0,1-5.19-2.32,2.71,2.71,0,0,1,1.7-1,13.11,13.11,0,0,0,1.29-.28,2.32,2.32,0,0,0,.94-.34,1.17,1.17,0,0,0-.27-.7h0A3.61,3.61,0,0,1,5.15,7.49,3.18,3.18,0,0,1,8,4.07a3.18,3.18,0,0,1,2.86,3.42,3.6,3.6,0,0,1-1.32,2.88h0a1.13,1.13,0,0,0-.27.69,2.68,2.68,0,0,0,.93.31,10.81,10.81,0,0,0,1.28.23,2.63,2.63,0,0,1,1.78,1A7,7,0,0,1,8,15Z" />
  </symbol>
  
  
    <symbol id="mobile" viewBox="0 0 16 16">

  
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg>
  
  
  
  </symbol>
  
  <symbol id="collection" viewBox="0 0 16 16">
    <rect width="7" height="7" />
    <rect y="9" width="7" height="7" />
    <rect x="9" width="7" height="7" />
    <rect x="9" y="9" width="7" height="7" />
  </symbol>
  <symbol id="charts" viewBox="0 0 16 16">
    <polygon points="0.64 7.38 -0.02 6.63 2.55 4.38 4.57 5.93 9.25 0.78 12.97 4.37 15.37 2.31 16.02 3.07 12.94 5.72 9.29 2.21 4.69 7.29 2.59 5.67 0.64 7.38" />
    <rect y="9" width="2" height="7" />
    <rect x="12" y="8" width="2" height="8" />
    <rect x="8" y="6" width="2" height="10" />
    <rect x="4" y="11" width="2" height="5" />
  </symbol>
  <symbol id="comments" viewBox="0 0 16 16">
    <path d="M0,16.13V2H15V13H5.24ZM1,3V14.37L5,12h9V3Z" />
    <rect x="3" y="5" width="9" height="1" />
    <rect x="3" y="7" width="7" height="1" />
    <rect x="3" y="9" width="5" height="1" />
  </symbol>
  <symbol id="pages" viewBox="0 0 16 16">
    <rect x="4" width="12" height="12" transform="translate(20 12) rotate(-180)" />
    <polygon points="2 14 2 2 0 2 0 14 0 16 2 16 14 16 14 14 2 14" />
  </symbol>
  <symbol id="appearance" viewBox="0 0 16 16">
    <path d="M3,0V7A2,2,0,0,0,5,9H6v5a2,2,0,0,0,4,0V9h1a2,2,0,0,0,2-2V0Zm9,7a1,1,0,0,1-1,1H9v6a1,1,0,0,1-2,0V8H5A1,1,0,0,1,4,7V6h8ZM4,5V1H6V4H7V1H9V4h1V1h2V5Z" />
  </symbol>
  <symbol id="trends" viewBox="0 0 16 16">
    <polygon points="0.64 11.85 -0.02 11.1 2.55 8.85 4.57 10.4 9.25 5.25 12.97 8.84 15.37 6.79 16.02 7.54 12.94 10.2 9.29 6.68 4.69 11.76 2.59 10.14 0.64 11.85" />
  </symbol>
  <symbol id="settings" viewBox="0 0 16 16">
    <rect x="9.78" y="5.34" width="1" height="7.97" />
    <polygon points="7.79 6.07 10.28 1.75 12.77 6.07 7.79 6.07" />
    <rect x="4.16" y="1.75" width="1" height="7.97" />
    <polygon points="7.15 8.99 4.66 13.31 2.16 8.99 7.15 8.99" />
    <rect x="1.28" width="1" height="4.97" />
    <polygon points="3.28 4.53 1.78 7.13 0.28 4.53 3.28 4.53" />
    <rect x="12.84" y="11.03" width="1" height="4.97" />
    <polygon points="11.85 11.47 13.34 8.88 14.84 11.47 11.85 11.47" />
  </symbol>
  <symbol id="options" viewBox="0 0 16 16">
    <path d="M8,11a3,3,0,1,1,3-3A3,3,0,0,1,8,11ZM8,6a2,2,0,1,0,2,2A2,2,0,0,0,8,6Z" />
    <path d="M8.5,16h-1A1.5,1.5,0,0,1,6,14.5v-.85a5.91,5.91,0,0,1-.58-.24l-.6.6A1.54,1.54,0,0,1,2.7,14L2,13.3a1.5,1.5,0,0,1,0-2.12l.6-.6A5.91,5.91,0,0,1,2.35,10H1.5A1.5,1.5,0,0,1,0,8.5v-1A1.5,1.5,0,0,1,1.5,6h.85a5.91,5.91,0,0,1,.24-.58L2,4.82A1.5,1.5,0,0,1,2,2.7L2.7,2A1.54,1.54,0,0,1,4.82,2l.6.6A5.91,5.91,0,0,1,6,2.35V1.5A1.5,1.5,0,0,1,7.5,0h1A1.5,1.5,0,0,1,10,1.5v.85a5.91,5.91,0,0,1,.58.24l.6-.6A1.54,1.54,0,0,1,13.3,2L14,2.7a1.5,1.5,0,0,1,0,2.12l-.6.6a5.91,5.91,0,0,1,.24.58h.85A1.5,1.5,0,0,1,16,7.5v1A1.5,1.5,0,0,1,14.5,10h-.85a5.91,5.91,0,0,1-.24.58l.6.6a1.5,1.5,0,0,1,0,2.12L13.3,14a1.54,1.54,0,0,1-2.12,0l-.6-.6a5.91,5.91,0,0,1-.58.24v.85A1.5,1.5,0,0,1,8.5,16ZM5.23,12.18l.33.18a4.94,4.94,0,0,0,1.07.44l.36.1V14.5a.5.5,0,0,0,.5.5h1a.5.5,0,0,0,.5-.5V12.91l.36-.1a4.94,4.94,0,0,0,1.07-.44l.33-.18,1.12,1.12a.51.51,0,0,0,.71,0l.71-.71a.5.5,0,0,0,0-.71l-1.12-1.12.18-.33a4.94,4.94,0,0,0,.44-1.07l.1-.36H14.5a.5.5,0,0,0,.5-.5v-1a.5.5,0,0,0-.5-.5H12.91l-.1-.36a4.94,4.94,0,0,0-.44-1.07l-.18-.33L13.3,4.11a.5.5,0,0,0,0-.71L12.6,2.7a.51.51,0,0,0-.71,0L10.77,3.82l-.33-.18a4.94,4.94,0,0,0-1.07-.44L9,3.09V1.5A.5.5,0,0,0,8.5,1h-1a.5.5,0,0,0-.5.5V3.09l-.36.1a4.94,4.94,0,0,0-1.07.44l-.33.18L4.11,2.7a.51.51,0,0,0-.71,0L2.7,3.4a.5.5,0,0,0,0,.71L3.82,5.23l-.18.33a4.94,4.94,0,0,0-.44,1.07L3.09,7H1.5a.5.5,0,0,0-.5.5v1a.5.5,0,0,0,.5.5H3.09l.1.36a4.94,4.94,0,0,0,.44,1.07l.18.33L2.7,11.89a.5.5,0,0,0,0,.71l.71.71a.51.51,0,0,0,.71,0Z" />
  </symbol>
  <symbol id="collapse" viewBox="0 0 16 16">
    <polygon points="11.62 3.81 7.43 8 11.62 12.19 10.09 13.71 4.38 8 10.09 2.29 11.62 3.81" />
  </symbol>
  <symbol id="search" viewBox="0 0 16 16">
    <path d="M6.57,1A5.57,5.57,0,1,1,1,6.57,5.57,5.57,0,0,1,6.57,1m0-1a6.57,6.57,0,1,0,6.57,6.57A6.57,6.57,0,0,0,6.57,0Z" />
    <rect x="11.84" y="9.87" width="2" height="5.93" transform="translate(-5.32 12.84) rotate(-45)" />
  </symbol>
</svg>
<header class="page-header">
  <nav>
  
    <button class="toggle-mob-menu" aria-expanded="false" aria-label="open menu">
      <svg width="20" height="20" aria-hidden="true">
        <use xlink:href="#down"></use>
      </svg>
    </button>
<ul class="admin-menu">
      <li class="menu-heading">
        <h3>المسؤول</h3>
      </li>
      <li>
        <a href="add_title.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>اضافة عناويين الاشتراكات</span>
        </a>
      </li>
      <li>
        <a href="add_share.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>اضافة الاشتراكات</span>
        </a>
      </li>
      <li>
        <a href="mobile.php">
          <svg>
            <use xlink:href="#mobile"></use>
          </svg>
          <span>تغيير رقم الواتساب للتواصل</span>
        </a>
      </li>
      
     
       <li>
        <a href="update_share.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>حذف وتعديل الاشتراكات</span>
        </a>
      </li>
       <li>
        <a href="update_title.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>حذف وتعديل عناويين الاشتراكات</span>
        </a>
      </li>
       <li>
        <a href="update_message.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>تعديل الرسالة الموجودة اعلي الصفحة الرئيسية</span>
        </a>
      </li>
         <li>
        <a href="add_panners.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>اضافة بنرات</span>
        </a>
      </li>
        <li>
        <a href="change_panners.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>تعديل وحذف بنرات</span>
        </a>
      </li>
        <li>
        <a href="update_message1.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>تعديل الرسالة الموجودة اسفل الصفحة</span>
        </a>
      </li>
        <li>
        <a href="update_logo.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>تعديل شعار الموقع</span>
        </a>
      </li>
       <li>
        <a href="update_header_color.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>تغيير لون الهيدر</span>
        </a>
      </li>
       <li>
        <a href="update_footer_color.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>تغيير لون الفوتر</span>
        </a>
      </li>
       <li>
        <a href="message_footer.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>تغيير حقوق الموقع</span>
        </a>
      </li>
       <li>
        <a href="code_sms.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>كود التحقق لرقم الجوال للعملاء </span>
        </a>
      </li>
      <li>
        <a href="code_users.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>كود التحقق للبريد الالكتروني للعملاء</span>
        </a>
      </li>
       <li>
        <a href="api_sms.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>تعديل api sms</span>
        </a>
      </li>
       <li>
        <a href="api_pay.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>تعديل api الدفع</span>
        </a>
      </li>
       <li>
        <a href="add_currency.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>تحديد العملة</span>
        </a>
      </li>
        <li>
        <a href="add_code.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>اضافة اكواد الدفع للاشتراكات</span>
        </a>
      </li>
        <li>
        <a href="update_code.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>تعديل وحذف اكواد الدفع للاشتراكات</span>
        </a>
      </li>
       <li>
        <a href="users.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>عرض بيانات الاعضاء</span>
        </a>
      </li>
       <li>
        <a href="users_sells.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>عرض المبيعات للاعضاء</span>
        </a>
      </li>
       <li>
        <a href="add_sub_pages.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>اضافة صفحات فرعية</span>
        </a>
      </li>
       <li>
        <a href="update_sub_pages.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>تحديث الصفحات الفرعية</span>
        </a>
      </li>
        <li class="menu-heading">
        <h3>الصفحات الفرعية</h3>
      </li>
     <?php 
      include 'connection.php';
      $result33 = mysqli_query($link,"select * from sub_pages_names");
      while($row33= mysqli_fetch_array($result33)){
      ?>
        <li>
        <a href="information.php?ID=<?php echo $row33['ids']; ?>">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span><?php echo $row33['name']; ?></span>
        </a>
      </li>
      <?php } ?>
       <li>
        <a href="update_information.php">
          <svg>
            <use xlink:href="#pages"></use>
          </svg>
          <span>تحديث المعلومات</span>
        </a>
      </li>
      <li class="menu-heading">
        <h3>اعدادات لوحة التحكم</h3>
      </li>
      <li>
          
        <a href="setting.php">
          <svg>
            <use xlink:href="#settings"></use>
          </svg>
          <span>الاعدادات </span>
        </a>
      </li>
      <li class="menu-heading">
        <h3>الذهاب الي الموقع وتسجيل الخروج</h3>
      </li>
       <li>
        <a href="panel.php">
          <svg>
            <use xlink:href="#settings"></use>
          </svg>
          <span>الرئيسية</span>
        </a>
      </li>
      <li>
        <a href="https://unwashed-blast.000webhostapp.com/share/Share1">
          <svg>
            <use xlink:href="#settings"></use>
          </svg>
          <span>الذهاب الي الموقع</span>
        </a>
      </li>
      <li>
        <a href="./">
          <svg>
            <use xlink:href="#settings"></use>
          </svg>
          <span>تسجيل الخروج</span>
        </a>
      </li>
      
      
      <li>
        <div class="switch">
          <input type="checkbox" id="mode" checked>
          <label for="mode">
            <span></span>
            <span>داكن</span>
          </label>
        </div>
        <button class="collapse-btn" aria-expanded="true" aria-label="collapse menu">
          <svg aria-hidden="true">
            <use xlink:href="#collapse"></use>
          </svg>
          <span>تصغير</span>
        </button>
      </li>
    </ul>
  </nav>
</header>
<section class="page-content">
  <section class="search-and-user">
    <form>
      <input type="search" placeholder="ابحث عن">
      <button type="submit" aria-label="submit form">
        <svg aria-hidden="true">
          <use xlink:href="#search"></use>
        </svg>
      </button>
    </form>
    <div class="admin-profile">
      <span class="greeting">مرحبا بك في لوحة التحكم</span>
      <div class="notifications">
        <svg>
          <use xlink:href="#users"></use>
        </svg>
      </div>
    </div>
  </section>
  <section class="grid">
   
<main class="st_viewport">
  <div class="st_wrap_table" data-table_id="0">
    <header class="st_table_header">
      <div class="st_row">
        <div class="st_column _rank">اسم الصفحة الفرعية</div>
        <div class="st_column _section">تحديث</div>
      </div>
    </header>
    <div class="st_table">
        <?php 
        include 'connection.php';
        $result=mysqli_query($link,"Select * from sub_pages_names");
        while($row = mysqli_fetch_array($result)){
        ?>
      <div class="st_row">
        <div class="st_column _rank"><?php echo $row['name']; ?></div>
      
        <div class="st_column _section">
         <a href="edit_sub_pages.php?GetId=<?php echo $row['ids'];?>">   <button class="glow-on-hover" type="button">تعديل</button></a>
      <a href="delete7.php?DEL=<?php echo $row['ids']; ?>"> <button class="glow-on-hover" type="button">حذف</button>
</a>
        </div>
      </div>
    <?php } ?>
    
  </div>
  </div>
</main>

   
    
  </section>
  
</section>

<script>
const html = document.documentElement;
const body = document.body;
const menuLinks = document.querySelectorAll(".admin-menu a");
const collapseBtn = document.querySelector(".admin-menu .collapse-btn");
const toggleMobileMenu = document.querySelector(".toggle-mob-menu");
const switchInput = document.querySelector(".switch input");
const switchLabel = document.querySelector(".switch label");
const switchLabelText = switchLabel.querySelector("span:last-child");
const collapsedClass = "collapsed";
const lightModeClass = "light-mode";

/*TOGGLE HEADER STATE*/
collapseBtn.addEventListener("click", function () {
  body.classList.toggle(collapsedClass);
  this.getAttribute("aria-expanded") == "true"
    ? this.setAttribute("aria-expanded", "false")
    : this.setAttribute("aria-expanded", "true");
  this.getAttribute("aria-label") == "collapse menu"
    ? this.setAttribute("aria-label", "expand menu")
    : this.setAttribute("aria-label", "collapse menu");
});

/*TOGGLE MOBILE MENU*/
toggleMobileMenu.addEventListener("click", function () {
  body.classList.toggle("mob-menu-opened");
  this.getAttribute("aria-expanded") == "true"
    ? this.setAttribute("aria-expanded", "false")
    : this.setAttribute("aria-expanded", "true");
  this.getAttribute("aria-label") == "open menu"
    ? this.setAttribute("aria-label", "close menu")
    : this.setAttribute("aria-label", "open menu");
});

/*SHOW TOOLTIP ON MENU LINK HOVER*/
for (const link of menuLinks) {
  link.addEventListener("mouseenter", function () {
    if (
      body.classList.contains(collapsedClass) &&
      window.matchMedia("(min-width: 768px)").matches
    ) {
      const tooltip = this.querySelector("span").textContent;
      this.setAttribute("title", tooltip);
    } else {
      this.removeAttribute("title");
    }
  });
}

/*TOGGLE LIGHT/DARK MODE*/
if (localStorage.getItem("dark-mode") === "false") {
  html.classList.add(lightModeClass);
  switchInput.checked = false;
  switchLabelText.textContent = "اضاءه";
}

switchInput.addEventListener("input", function () {
  html.classList.toggle(lightModeClass);
  if (html.classList.contains(lightModeClass)) {
    switchLabelText.textContent = "اضاءه";
    localStorage.setItem("dark-mode", "false");
  } else {
    switchLabelText.textContent = "داكن";
    localStorage.setItem("dark-mode", "true");
  }
});
</script>

</html>
