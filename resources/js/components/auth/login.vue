<template>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form"  @submit.prevent="login">
			<!--		<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>-->
	
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email"  v-model="form.email" placeholder="Email">
					
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" v-model="form.password" placeholder="Password">
				
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn btn-success">
             
								Login
              
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

					 <router-link to='/signup'>
							Sign Up
						   <span></span>
                            </router-link>
					</div>
				</form>
			</div>
		</div>
	</div>
  


   
</template>


<script type="text/javascript">
export default{

data(){
  return{
        form:{
          email: null,
          password: null
        },
        errors:{}
      }
} ,
      methods:{
        login(){
          axios.post('/api/auth/login', this.form)
          .then(res=> {
            User.responseAfterLogin(res)
            Toast.fire({
              icon: 'success',
              title: 'Signed in successfully'
})
               window.location.href = 'api/UserPage';
            })
           .catch(()=>{
            Toast.fire({
              icon: 'warning',
              title: 'Invalid email or password!'
            });  
           })
        }
      }
  }


</script>
<style type="text/css">
#form {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

</style>