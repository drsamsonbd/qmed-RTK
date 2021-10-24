let login = require('./components/auth/login.vue').default;
let register = require('./components/auth/register.vue').default;
let forget = require('./components/auth/forget.vue').default;
let home = require('./components/Dashboard.vue').default;

let logout = require('./components/auth/logout.vue').default;

//pentadbir
let user= require('./components/admin/user.vue').default;
let department= require('./components/admin/department.vue').default;
//settings component
let race= require('./components/settings/race.vue').default;
let area= require('./components/settings/area.vue').default;
let district= require('./components/settings/district.vue').default;
let nationality= require('./components/settings/nationality.vue').default;
let locality= require('./components/settings/locality.vue').default;
let hospital= require('./components/settings/hospital.vue').default;
let pkrc= require('./components/settings/pkrc.vue').default;
let vaccine= require('./components/settings/vaccine.vue').default;
let ward= require('./components/settings/ward.vue').default;
let bed= require('./components/settings/bed.vue').default;
let discipline= require('./components/settings/discipline.vue').default;

//user page
let user_main= require('./components/User-Page/main.vue').default;
export const routes = [
    { path: '/login', component: login, name: 'login' },
    { path: '/register', component: register, name:'register' },
    { path: '/forget', component: forget, name:'forget' },
    { path: '/logout', component: logout, name:'logout' },
    { path: '/home', component: home, name:'home' },

    // Admin Routes
    { path: '/user', component: user, name:'user' },
    { path: '/department', component: department, name:'department' },
    // settings
    { path: '/race', component:race , name:'race' },
    { path: '/area', component:area , name:'area' },
    { path: '/district', component:district , name:'district' },
    { path: '/nationality', component: nationality, name:'nationality' },
    { path: '/locality', component: locality, name:'locality' },
    { path: '/hospital', component: hospital, name:'hospital' },
    { path: '/pkrc', component: pkrc, name:'pkrc' },
    { path: '/vaccine', component: vaccine, name:'vaccine' },
    { path: '/ward', component: ward, name:'ward' },
    { path: '/bed', component: bed, name:'bed' },
    { path: '/discipline', component: discipline, name:'discipline' },
 
  // User Page
  { path: '/main', component: user_main, name:'user_main' },
    
  ]