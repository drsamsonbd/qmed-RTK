<template>
<div>
      <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar">
                    <a class="navbar-brand" href="#">
                
                        <img :src="require('../../../../public/assets/img/Logo/qmLogo.png').default" alt="Logo"     height="100px"
    width="250px">
                    </a>

           
                </nav>
            </div>
        </div>
  <div class="content-wrapper bg-white" >
    <!-- Main content -->
    


    <!-- Main content -->
    <router-view></router-view>
    


    <!-- /.content -->

  <!-- /.content-wrapper -->
</div>
  <!-- Main Footer -->

 
</div>
<!--/wrapper -->


</template>

<script>


export default {
  created(){
      if (!User.loggedIn()) {
        this.$router.push({name: '/'})
      }
  },

         data(){
         return{
         roles: '',
         user: localStorage.getItem('user'),
         logohbln:'',
         APPNAME: 'CPRC HBLN',
    

      }
         },

        methods: {
       
    userRoles() {
        let self = this;
        axios.post('/api/auth/me' + '?token='+ localStorage.getItem('token'))
        .then(({data}) => (self.roles = data.roles)).catch(function (error) {
        console.log(error);    
          localStorage.removeItem('token');
           localStorage.removeItem('user');
         self.$router.push({ path: '/login' });
      });
    }

  
    },
 

  mounted(){
    this.userRoles();

  }
}
         



</script>

<style>

</style>