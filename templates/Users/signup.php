<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<style>
    /* Google Fonts - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}


header{
    font-size: 28px;
    font-weight: 600;
    color: #232836;
    text-align: center;
    margin-bottom: 20px;

}
form{
    margin-top: 30px;
}
.form .field{
    position: relative;
    height: 50px;
    width: 100%;
    margin-top: 20px;
    border-radius: 6px;
}
.field input,
.field button{
    height: 100%;
    width: 100%;
    border: none;
    font-size: 16px;
    font-weight: 400;
    border-radius: 6px;
    transition: all 0.3s ease;

}
.field input{
    outline: none;
    padding: 10 15px;
    border: 1px solid #CACACA;
    margin-bottom: 5px;
    background-color: #f0f2f5;

}
.field input:focus{
    border-bottom-width: 2px;
    border-color: #0171d3;
    background-color: #fff;
}
.eye-icon{
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    font-size: 18px;
    color: #8b8b8b;
    cursor: pointer;
    padding: 5px;
}
.field button{
    color: #fff;
    background-color: #0171d3;
    transition: all 0.3s ease;
    cursor: pointer;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

}
.field button:hover{
    background-color: #016dcb;
}
.form-link{
    text-align: center;
    margin-top: 10px;
}
.form-link span,
.form-link a{
    font-size: 14px;
    font-weight: 400;
    color: #232836;
}
.form a{
    color: #0171d3;
    text-decoration: none;
}
.form-content a:hover{
    text-decoration: underline;
}
.line{
    position: relative;
    height: 1px;
    width: 100%;
    margin: 36px 0;
    background-color: #d4d4d4;
}
.line::before{
    content: 'Or';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #FFF;
    color: #8b8b8b;
    padding: 0 15px;
}
.media-options a{
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 10px;
    height: 50px;
    border-radius: 6px;
    transition: all 0.3s ease;
}

.media-options a:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

a.facebook{
    color: #fff;
    background-color: #4267b2;
}
a.facebook .facebook-icon{
    height: 28px;
    width: 28px;
    color: #0171d3;
    font-size: 20px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #fff;
    margin-right: 10px;
}
.facebook-icon,
img.google-img{
    position: absolute;
    top: 50%;
    left: 15px;
    transform: translateY(-50%);
}
img.google-img{
    height: 20px;
    width: 20px;
    object-fit: cover;
}
a.google{
    border: 1px solid #CACACA;
    color: #232836;
    background-color: #fff
}
a.google span{
    font-weight: 500;
    opacity: 0.6;
    color: #232836;
    margin-left: 10px;
}
.sign {
    margin-top:10px;
}

@media screen and (max-width: 400px) {
    .form{
        padding: 20px 10px;
    }
    
}

.top-nav-links{
    display: none !important;
}

</style>
<div class="row">
    <div class="column column-80">
        <div class="users form content">
            <section class="container forms">
            <!-- Signup Form -->
            <div class="form signup">
                <div class="form-content">
                    <header>Sign Up</header>
                    <?= $this->Form->create($user) ?>
                        <div class="field input-field">
                            <?php
                                echo $this->Form->control('email',['class'=>'input']);
                            ?>
                        </div>
                        <div class="field input-field">
                            <?php
                                echo $this->Form->control('password',['type'=>'password'],['class'=>'password']);
                            ?>
                        </div>
                        <div class="field input-field">
                            <?php
                                echo $this->Form->control('phone',['class'=>'phone']);
                            ?>
                        </div>
                        <div class="field button-field">
                            <?= $this->Form->button(__('SignUp'),['class'=>'sign'], ['action' => '']) ?>
                           
                        </div>
                    <?= $this->Form->end() ?>
                    <!--
                    <div class="form-link">
                        <span>Already have an account? <?= $this->Html->link(__('Log In'), ['action' => 'login'], ['class' => 'link login-link']) ?></span>
                        
                    </div>
                </div>
                <div class="line"></div>
                <div class="media-options">
                    <a href="#" class="field facebook">
                        <span>Login with Facebook</span>
                    </a>
                </div>
                <div class="media-options">
                    <a href="#" class="field google">
                        <span>Login with Google</span>
                    </a>
                </div>
                -->
            </div>
        </section>

            

        </div>
    </div>
</div>
