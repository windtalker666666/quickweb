<!DOCTYPE html>
<html lang="zh-CN">

<head>
  
  <meta charset="utf-8">
  <title>Quickweb</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="本网站接受各种外包项目。">
  <meta name="keywords" content="laravel,html,css,js,vue.js,node.js">
  <meta name="author" content="windtalke666">
  <meta name="robots" content="index,follow">
  <meta name="application-name" content="wb">
  
  <!-- Site CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc2/css/bootstrap-glyphicons.css" />  <!--this is the bootstrap sign css -->
  <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://static.bootcss.com/www/assets/css/site.min.css?1510078115427" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="/css/customize1.css">
   <link rel="stylesheet" type="text/css" href="/css/customize2.css">


   <script language="javascript">  
    function chy(obj){  
        var rr = $("input[type='radio']:checked").val();  
        if(rr =="1" || rr = "2"){  
            document.getElementById("patent1").style.display="none";   
        }  
    }  
    function chn(obj){  
        var rr = $("input[type='radio']:checked").val();  
        if(rr =="3"){  
            document.getElementById("patent1").style.display="";   
        }  
    }  
</script>
  


  <style>
  .job-hot {
    position: relative;
    color: #d9534f;
    right: 0;
    top: 15px;
  }
  </style> 
</head>




<body>

@include('layouts.nav')


<div class="bs-docs-header" id="content" tabindex="-1">
      <div class="container">
        <h1>定制</h1>
        <p>简要介绍如何通过初步填写下列表格了解顾客主要需求，以下内容收集过程也许有点繁杂，但是对于我们的工作十分重要。</p>
        
      </div>
    </div>



<div class="container bs-docs-container">

      <div class="row">
        <div class="col-md-9" role="main">
          <div class="bs-docs-section">

  <h2 id="require" class="">需求</h2>

  <p class="lead">以下哪一个选项更接近您的主要需求：</p>


<!-- this is the radio -->
<div class="row bs-downloads">
    <div class="col-sm-4">
        <div class="radio">
           <label>
             <input type="radio" name="optionsRadios" id="optionsRadios1" 
         value="option1" checked>  <h3 id="download-bootstrap">公司官网</h3>
          </label>
        </div>
      <p>带有公司官网的常规应用（不包括商城）</p>
    </div>

    <div class="col-sm-4">
       <div class="radio">
           <label>
             <input type="radio" name="optionsRadios" id="optionsRadios1" 
             value="option1" checked>  <h3 id="download-bootstrap">商城网站</h3>
          </label>
        </div>   
      <p>具有购物功能的网站</p>
    </div>

    <div class="col-sm-4">
      <div class="radio">
           <label>
             <input type="radio" name="optionsRadios" id="optionsRadios1" 
             value="option1" checked>  <h3 id="download-bootstrap">论坛项目</h3>
          </label>
        </div>  
        <p>具有评论，交互作用的网站</p> 
    </div>

    <div class="col-sm-4">
      <div class="radio">
           <label>
             <input type="radio" name="optionsRadios" id="optionsRadios1" 
             value="option1" checked>  <h3 id="download-bootstrap">特定功能项目</h3>
          </label>
        </div>  
        <p>具有特定功能的项目</p> 
    </div>

    <div class="col-sm-4">
      <div class="radio">
           <label>
             <input type="radio" name="optionsRadios" id="optionsRadios1" 
             value="option1" checked>  <h3 id="download-bootstrap">项目拓展</h3>
          </label>
        </div>  
        <p>在原有项目的基础上进行功能拓展</p> 
    </div>

    <div class="col-sm-4">
      <div class="radio">
           <label>
             <input type="radio" name="optionsRadios" id="optionsRadios1" 
             value="option1" checked>  <h3 id="download-bootstrap">区块链项目</h3>
          </label>
        </div>  
        <p>此项目暂未解锁</p> 
    </div>

    </div> <!-- end row bs-downloads-->
    

<hr>
<h2 id="info" class="">项目的主要信息<span style="color:red">*</span></h2>
<p class="lead">请您简单描述一下你所需要的项目</p>
<textarea class="form-control" rows="4" require></textarea>


<hr>
<span>
<h2 id="perorcom" class="">项目的甲方是个人或者公司？<span style="color:red">*</span></h2>
<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="1" onchange="chn(this)" checked>
    个人
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="2" onchange="chn(this)">
    公司
  </label>
</div>

<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios3" value="3" onchange="chy(this)">
   其他
  </label>

  <tr id="patent1" style="display:none">
 <td><input type="text" name="require" class="form-control"></td>
</tr>

</div>


</span>


  




  </div><!-- end bs-docs-section-->



</div><!-- end col-md-9-->
</div><!--end row-->
</div><!--end container bs-docs-container-->

 

  



  












@include('layouts.footer')
  
</body>
</html>