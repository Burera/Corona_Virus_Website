<style>


 html{
     scroll-behavior: smooth;
 }   

*{
    font-family: 'Balsamiq Sans', cursive;
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    
}

.nav_style
{
    background-color: indianred !important;
}
.nav_style a
{
   color: white;
}


.main_header
{
    width: 100%;
    height: 450px;;
}
.leftside
{
    padding-top: 85px;
}

.leftside img{animation: heart 5s linear infinite;}
@keyframes heart
{
    0%
    {
        transform: scale(.75);
    }
    20%
    {
        transform: scale(1);
    }
    40%
    {
        transform: scale(.75);
    }
    60%
    {
        transform: scale(1);
    }
    80%
    {
        transform: scale(.75);
    }
    100%
    {
        transform: scale(.75);
    }
}
.rigtside img 
{
    animation: goo 3s linear infinite;
}
@keyframes goo 
{
    0%{transform: rotate(0);}
}
@keyframes goo 
{
    100%{transform: rotate(360deg);}
}
.rigtside
{
    font-size: 1rem;;
    padding-top: 40px;
}

.corona_update
{
    margin: 0 0 30px 0;
}
.corona_update h3
{
    color: indianred;
    align-items: center;
    padding-bottom: 20px;
    font-weight: bold;
}
.corona_update h1{
    font-size: 2rem;
}
.sub_section
{
    background-color: #fbfafd;
}
.footer_style
{
    background-color: indianred;
    padding: 20px 0px;
}
/* #myBtn
{
    
    right: 40px;
    border: none;
    outline: none;
    color: white;
    cursor: pointer;
    border-radius: 10px;
    position: fixed;
    padding: 10px;
    background-color: #00A8FF;
    bottom: 30px;
    z-index: 99;
    display: none;
   
} */
#myBtn {
  
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color:indianred;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;

}

#myBtn:hover
{
 background: #606060;
}


@media(max-width:768px)
{
.main_header{
    height: 700px;
    text-align: center;
}
.main_header h1
{
    text-align: center;
    padding: 0;
    width: 100%;
    font-size: 38px;
}
.count_style
{
    display: inline!important;
}
.count_style p
{
    text-align: center;
}
}
</style>