<template>

	<div class="limiter">
        <br>
        <br>
        <br>
		<div class="container-login100">
         			<div class="wrap-login100">
				<form class="login100-form validate-form"  @submit.prevent="register">
			<!--		<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>-->
                    	<div class="wrap-input100 validate-input" data-validate = "Enter Full Name">
						<input class="input100" type="text" name="name"  v-model="form.name" placeholder="Full Name as Per IC or Passport">
					
					</div>

                    	<div class="wrap-input100 validate-input" data-validate = "Enter Phone Number">
						<input class="input100" type="text" name="name"  v-model="form.phone" placeholder="Phone Number">
					
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email"  v-model="form.email" placeholder="Email">
					  <small class="text-danger" v-if="errors.email">{{errors.email[0]}}</small>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" v-model="form.password" placeholder="Password">
				
					</div>
                    		<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" v-model="form.password_confirmation" placeholder="Confirm Password">
				              <small class="text-danger" v-if="errors.password_confirmation">{{errors.password_confirmation[0]}}</small>
					</div>


					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn btn-success">
								Sign Up
							</button>
						</div>
					</div>

					<div class="text-center p-t-50">
						<span class="txt1">
							Already have an account?
						</span>

							 <router-link to='/login'>
							Sign In
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
			name: null,
          email: null,
		  phone: null,
          password: null,
		    confirm_password: null,
			roles: null,
        },
        errors:{
			password_confirmation: '',
			email: '',
		}
      }
} ,
      methods:{
        register(){
          axios.post('/api/auth/register', this.form)
          .then(res=> {
            Toast.fire({
              icon: 'success',
              title: 'Successfully registered'
})
            this.$router.push({name:'senarai'})            
        
            })
          .catch(error=> this.errors = error.response.data.errors)
         
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