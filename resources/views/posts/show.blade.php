@extends('layout')


@section('content')

<html><head><title>DedicatedToServers</title><link rel='stylesheet' type='text/css' href='css/style.css' version=01></head>

<body>

<div class="header">
  <img src="images/logo.png" align="center"> 
</div>

<div class="row">
  <div class="leftcolumn">
      <div class="category">
      <h2>
      <a href = "./">Home</a> 
      
     <a href = "./PostList.pl?cat=General&id=1"> General</a> 
     
     <a href = "./PostList.pl?cat=DevOps&id=2"> DevOps</a> 
     
     <a href = "./PostList.pl?cat=Terraform&id=4"> Terraform</a> 
     
     <a href = "./PostList.pl?cat=Ansible&id=5"> Ansible</a> 
     
     <a href = "./PostList.pl?cat=Puppet&id=6"> Puppet</a> 
     
     <a href = "./PostList.pl?cat=Azure&id=7"> Azure</a> 
     
     <a href = "./PostList.pl?cat=AWS&id=8"> AWS</a> 
     
     <a href = "./PostList.pl?cat=Git&id=9"> Git</a> 
     
     <a href = "./PostList.pl?cat=Bash&id=10"> Bash</a> 
     
     <a href = "./PostList.pl?cat=Perl&id=21"> Perl</a> 
     
     <a href = "./PostList.pl?cat=Php&id=22"> Php</a> 
     
     <a href = "./PostList.pl?cat=SysAdmin&id=25"> Sys Admin</a> 
     
     </h2>
      </div>
   
    
          <div class="card">
      <div class="image" ></div>
      <p class = "PostTitle">Welcome to the DedicatedToServers Blog</p>
      <p>&nbsp;</p>
      
      <p>
    
               <P> {{ $post->title }}</P>
               <P> {{ $post->content }}</P>
      
    </div>
    

  </div>
  <div class="rightcolumn">
    <div class="card">
      <h3>About Me</h3>
      <div class="myimg" >&nbsp;</div>
      <p align="center"><strong>Who am I?</strong> <br/>

     <p>As a mathematician with 15 years as a php programmer throughout the years, I now see myself as a software engineer and cloud engineer with particular interest in IAC.
<br/><br/>
<center>
Favorite Sites<br/>
<div class="toppostcategory">
<a href="https://thescottishgypsies.co.uk/">The Gypsies of Scotland</a>
</div>
<div class="toppostcategory">
<a href="https://scottishborders.uk/">Things to do in the Scottish Borders</a>
</div>
</center></p>


</p>
    </div>
    <div class="card">
      <h3>Popular Posts</h3>
      

      
      <div class="toppostcategory">
   
      <img src = "/images/me.png" width="40" height = "40" align = "middle">
      <a href="#">Not yet implemented</a>
      
      </div><br>
      

      
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p><img src="./images/server.jpg"  width="100%" height="10%"><br/><br/>

<p align="center"><a target = "_new" href="https://www.linkedin.com/in/forgeserversolutions">
<img src="./images/linkedin.png" width="200" border="0">
</a>
<p> <br/>

</p>
    </div>
  </div>
</div>

<div class="footer">
  <h2>
  <p  align=center><b>Website hosting and design by Dedicated to Servers, contact <a href=mailto:info@dedicatedtoservers.com?subject=Website&nbsp;Inquiry>info@dedicatedtoservers.com</a><br>
 </p><script>
function toggle(el)
{
myDisplay = el.style.display;


  if (myDisplay == 'none')
  {
     el.style.display = 'block';
  }
   else   {
              el.style.display = 'none';
     }    
 return false;
}
</script><p  align=center>
<a onClick="return toggle(document.getElementById('contactForm'));" href='' >Click to send a quick inquiry</a>
</p>


</p><p align=center>  All rights Reserved &copy 2014-2024</p>
  </h2>
</div>

<script>
function ToggleContent(el,id)
{
    disp = document.getElementById("PostContent"+id).style.display;
    document.querySelectorAll(".PostContent").forEach(a=>a.style.display = "none");

 if (disp == 'block')
    {
        document.getElementById("PostContent"+id).style.display = 'none';
    }
    if (disp == 'none' || disp == '')
    {
        document.getElementById("PostContent"+id).style.display = 'block';
    }
        


}
</script>

    
@endsection