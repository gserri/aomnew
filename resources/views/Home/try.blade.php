<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
            .toc a {
              color: inherit !important;  /*toc specifically wants black text. This resets the headers*/
            }
          
            .toc li span:nth-child(2){  /*Allow dot leaders to fill remaining space but not overlap*/
              width: auto;
              overflow: hidden;
              white-space: nowrap; 
              display: block;
            }
          
            .toc li span:nth-child(2):after{
              font-family    : BookSanity;  /*Remove any header styles from dot leaders*/
               font-size     : 0.317cm;
              font-weight    : normal;
              color      : black;
              content:
                " ........................................"
                "........................................."
                "........................................."; 
            }
            
            .toc li span:first-child{
              float: right;
              font-family    : BookSanity;  /*Remove any header styles from page numbers*/
              font-size     : 0.317cm;
              font-weight    : normal;
              color      : black;
              margin-left    : 1px;  /*Leaves a small space between page numbers and dot leaders*/
            }
            
          /*Special cases for headings*/    
            .toc li h3 span:nth-child(2):after{
              content: " ";            /*Remove dot leaders on h3*/
            }
            
            .toc li h3 {
              margin-bottom: 4px !important;    /*Special spacing for h3*/
              margin-top: 10px !important;
              line-height: initial !important;  /*For some reason Multi-line h3 line spacing changed*/
            }
            
            .toc li h3 span:first-child{
              line-height: 1.8em !important;    /*Line page numbers up with Multi-line h3 better*/
            }
            
            .toc ul ul {
              margin-left: 10px !important;    /*Original lists intented too much*/
            }
            
            .toc>ul>li {
              margin-bottom: initial !important;  /*margin for list items needs to be removed or 0*/
            }
          </style>
</head>
<body>
        <div class='wide' style="text-align: center">
      
                # a Grim and Dark Tale
                  
                </div>
                
                <div class='toc'>
                
                
                - ### [<span></span><span>Introduzione</span>](#p3)
                
                 - #### [<span></span><span>Storia del mondo</span>](#p4)
                  
                - ### [<span></span><span>I nuovi regni</span>](#p5)
                 - #### [<span></span><span>Principato di Kelan</span>](#p6)
                 - #### [<span></span><span>Regno di Arcadium</span>](#p7)
                 - #### [<span></span><span>Impero di Seoryn</span>](#p8)
                 - #### [<span></span><span>Regno di Anthoras</span>](#p9)
                 - #### [<span></span><span>Impero di Tatekar</span>](#p10)
                 - #### [<span></span><span>Impero di atekar</span>](#p11)
                 - #### [<span></span><span>Impero di Tatekar</span>](#p12)
                 - #### [<span></span><span>Impero di Tatekar</span>](#p13)
                 - #### [<span></span><span>Impero di Tatekar</span>](#p14)
                 - #### [<span></span><span>Impero di Tatekar</span>](#p15)
                - ### <span></span><span>Regole</span>
                 - #### <span></span><span>Razze</span>
                 - #### <span></span><span>Classi</span>
                 - #### <span></span><span>Regole</span>
                
                </div>
</body>
</html>
