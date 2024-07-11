<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<style>
    /* Google Fonts - Poppins */
/* @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
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
.lo {
    margin-top:10px;
}


@media screen and (max-width: 400px) {
    .form{
        padding: 20px 10px;
    }
    
} */

@import "compass/css3";

* { box-sizing: border-box; margin: 0; padding:0; }

html {
  background: #95a5a6;
  background-image: url(http://subtlepatterns2015.subtlepatterns.netdna-cdn.com/patterns/dark_embroidery.png);
  font-family: 'Helvetica Neue', Arial, Sans-Serif;}
  
  .login-wrap {
    position: relative;
    margin: 0 auto;
    background: #ecf0f1;
    width: 350px;
    border-radius: 5px;
    box-shadow: 3px 3px 10px #333;
    padding: 15px;
    
    h2 {
      text-align: center;
      font-weight: 200;
      font-size: 2em;
      margin-top: 10px;
      color: #34495e;
    }
    
    .form {
      padding-top: 20px;
      
      .um,
      .pw,
      .lo {
        width: 80%;
        margin-left: 10%;
        margin-bottom: 25px;
        height: 40px;
        border-radius: 5px;
        outline: 0;
        -moz-outline-style: none;
      }
      
      input[type="text"],
      input[type="password"] {
        border: 1px solid #bbb;
        padding: 0 0 0 10px;
        font-size: 14px;
        &:focus {
          border: 1px solid #3498db;
        }
      }
      
      a {
        text-align: center;
        font-size: 10px;
        color: #3498db;
        
        p{
          padding-bottom: 10px;
        }
        
      }
      
      .lo {
        background: #e74c3c;
        border:none;
        color: white;
        font-size: 18px;
        font-weight: 200;
        cursor: pointer;
        transition: box-shadow .4s ease;
        
        &:hover {
          box-shadow: 1px 1px 5px #555;  
        }
          
        &:active {
            box-shadow: 1px 1px 7px #222;  
        }
        
      }
      
    }
    
    &:after{
    content:'';
    position:absolute;
    top: 0;
    left: 0;
    right: 0;    
    background:-webkit-linear-gradient(left,               
        #27ae60 0%, #27ae60 20%, 
        #8e44ad 20%, #8e44ad 40%,
        #3498db 40%, #3498db 60%,
        #e74c3c 60%, #e74c3c 80%,
        #f1c40f 80%, #f1c40f 100%
        );
       background:-moz-linear-gradient(left,               
        #27ae60 0%, #27ae60 20%, 
        #8e44ad 20%, #8e44ad 40%,
        #3498db 40%, #3498db 60%,
        #e74c3c 60%, #e74c3c 80%,
        #f1c40f 80%, #f1c40f 100%
        );
      height: 5px;
      border-radius: 5px 5px 0 0;
  }
    
  }
  

.top-nav-links{
    display: none !important;
}
</style>

<div class="login-wrap">
  <h2>Login</h2>
  
  <div class="form">
    <?= $this->Form->create($user) ?>
    <?php
        echo $this->Form->control('email',['class'=>'um']);
    ?>
    <?php
        echo $this->Form->control('password',['class'=>'pw']);
    ?>
    <?= $this->Form->button(__('LogIn'),['class'=>'lo']) ?>  </div>
    <?= $this->Form->end() ?>
</div>
</div>
