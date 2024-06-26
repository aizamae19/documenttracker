<title>Document Tracking System</title>
<link rel="icon" type="image/ico" href="{{asset('assets/img/MaasinCity.png')}}">
<style type="text/css">
      html {
            font-family:Calibri, Arial, Helvetica, sans-serif; 
            font-size:11pt;  
      }
      a.comment-indicator:hover + div.comment { 
            background:#ffd; 
            position:absolute; 
            display:block; 
            border:1px solid black; 
            padding:0.5em 
      }
      a.comment-indicator {
            background:red; 
            display:inline-block; 
            border:1px solid black; 
            width:0.5em; 
            height:0.5em 
      }
      div.comment { 
            display:none 
      }
      table { 
            border-collapse:collapse; 
            page-break-after:always 
      }
      .gridlines td { 
            border:1px dotted black 
      }
      .gridlines th { 
            border:1px dotted black 
      }
      .b { 
            text-align:center 
      }
      .e { 
            text-align:center 
      }
      .f { 
            text-align:right 
      }
      .inlineStr { 
            text-align:left 
      }
      .n { 
            text-align:right 
      }
      .s { 
            text-align:left 
      }
      td.style0 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:none #000000; 
            border-top:none #000000; 
            border-left:none #000000; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;  
      }
      th.style0 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:none #000000; 
            border-top:none #000000; 
            border-left:none #000000; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt; 
      }
      td.style1 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:none #000000; 
            border-top:none #000000; 
            border-left:1px solid #000000 !important; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;  
      }
      th.style1 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:none #000000; 
            border-top:none #000000; 
            border-left:1px solid #000000 !important; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;  
      }
      td.style2 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:none #000000; 
            border-left:none #000000; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt; 
      }
      th.style2 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:none #000000; 
            border-left:none #000000; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;  
      }
      td.style3 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:none #000000; 
            border-left:none #000000; 
            border-right:1px solid #000000 !important; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt; 
      }
      th.style3 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:none #000000; 
            border-left:none #000000; 
            border-right:1px solid #000000 !important; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt; 
      }
      td.style4 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:none #000000; 
            border-left:1px solid #000000 !important; 
            border-right:1px solid #000000 !important; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;  
      }
      th.style4 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:none #000000; 
            border-left:1px solid #000000 !important; 
            border-right:1px solid #000000 !important; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt; 
      }
      td.style5 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:1px solid #000000 !important; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;
      }
      th.style5 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:1px solid #000000 !important; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt; 
      }
      td.style6 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt; 
      }
      th.style6 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt; 
      }
      td.style7 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:1px solid #000000 !important; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt; 
      }
      th.style7 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:1px solid #000000 !important; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt; 
      }
      td.style8 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:1px solid #000000 !important; 
            border-right:none #000000; 
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial'; 
            font-size:10pt; 
      }
      th.style8 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:1px solid #000000 !important; 
            border-right:none #000000; 
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial'; 
            font-size:10pt;  
      }
      td.style9 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:1px solid #000000 !important; 
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial'; 
            font-size:10pt; 
      }
      th.style9 { 
            vertical-align:top;
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:1px solid #000000 !important; 
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial'; 
            font-size:10pt;
      }
      td.style10 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:1px solid #000000 !important; 
            border-right:none #000000; 
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial'; 
            font-size:12pt;  
      }
      th.style10 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:1px solid #000000 !important; 
            border-right:none #000000; 
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial'; 
            font-size:12pt;
      }
      td.style11 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:none #000000; 
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial'; 
            font-size:12pt; 
      }
      th.style11 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:none #000000; 
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial'; 
            font-size:12pt; 
      }
      td.style12 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:1px solid #000000 !important; 
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial'; 
            font-size:12pt; 
      }
      th.style12 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:1px solid #000000 !important; 
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial'; 
            font-size:12pt; 
      }
      td.style13 { 
            vertical-align:middle; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:1px solid #000000 !important; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;
      }
      th.style13 { 
            vertical-align:middle; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:1px solid #000000 !important; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;
      }
      td.style14 { 
            vertical-align:middle; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;
      }
      th.style14 { 
            vertical-align:middle; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt; 
      }
      td.style15 { 
            vertical-align:middle; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:1px solid #000000 !important; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;  
      }
      th.style15 { 
            vertical-align:middle; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:1px solid #000000 !important; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt; 
      }
      td.style16 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:none #000000; 
            border-top:1px solid #000000 !important; 
            border-left:1px solid #000000 !important; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;
      }
      th.style16 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:none #000000; 
            border-top:1px solid #000000 !important; 
            border-left:1px solid #000000 !important; 
            border-right:none #000000;
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;  
      }
      td.style17 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:none #000000; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:1px solid #000000 !important; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;  
      }
      th.style17 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:none #000000; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:1px solid #000000 !important; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;  
      }
      td.style18 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:none #000000; 
            border-top:none #000000; 
            border-left:1px solid #000000 !important; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;  
      }
      th.style18 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:none #000000; 
            border-top:none #000000; 
            border-left:1px solid #000000 !important; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt; 
      }
      td.style19 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:none #000000; 
            border-top:none #000000; 
            border-left:none #000000; 
            border-right:1px solid #000000 !important; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;  
      }
      th.style19 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:none #000000; 
            border-top:none #000000; 
            border-left:none #000000; 
            border-right:1px solid #000000 !important; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;  
      }
      td.style20 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:none #000000; 
            border-top:1px solid #000000 !important; 
            border-left:1px solid #000000 !important; 
            border-right:1px solid #000000 !important; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;  
      }
      th.style20 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:none #000000; 
            border-top:1px solid #000000 !important; 
            border-left:1px solid #000000 !important; 
            border-right:1px solid #000000 !important; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt; 
      }
      td.style21 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:none #000000; 
            border-top:none #000000; 
            border-left:1px solid #000000 !important; 
            border-right:1px solid #000000 !important; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt; 
      }
      th.style21 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:none #000000; 
            border-top:none #000000; 
            border-left:1px solid #000000 !important; 
            border-right:1px solid #000000 !important; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;  
      }
      td.style22 { 
            vertical-align:bottom; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:1px solid #000000 !important; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;  
      }
      th.style22 { 
            vertical-align:bottom; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:1px solid #000000 !important; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;  
      }
      td.style23 { 
            vertical-align:bottom; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;  
      }
      th.style23 { 
            vertical-align:bottom; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;  
      }
      td.style24 { 
            vertical-align:bottom; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:1px solid #000000 !important; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;  
      }
      th.style24 { 
            vertical-align:bottom; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:1px solid #000000 !important; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;  
      }
      td.style25 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:none #000000; 
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial';
            font-size:10pt; 
      }
      th.style25 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:0px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:none #000000; 
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial'; 
            font-size:10pt;  
      }
      td.style26 { 
            vertical-align:top; 
            text-align:center; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt; 
      }
      th.style26 { 
            vertical-align:top; 
            text-align:center; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt; 
      }
      td.style27 { 
            vertical-align:top; 
            text-align:center; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:1px solid #000000 !important; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt; 
      }
      th.style27 { 
            vertical-align:top; 
            text-align:center; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:1px solid #000000 !important; 
            border-right:none #000000; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt; 
      }
      td.style28 { 
            vertical-align:top; 
            text-align:center; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:1px solid #000000 !important; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt; 
      }
      th.style28 { 
            vertical-align:top; 
            text-align:center; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:1px solid #000000 !important; 
            color:#000000; 
            font-family:'Times New Roman'; 
            font-size:10pt;  
      }
      td.style29 { 
            vertical-align:top; 
            text-align:center; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:1px solid #000000 !important; 
            border-right:none #000000; 
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial'; 
            font-size:11pt;  
      }
      th.style29 { 
            vertical-align:top; 
            text-align:center; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:1px solid #000000 !important; 
            border-right:none #000000; 
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial'; 
            font-size:11pt;  
      }
      td.style30 { 
            vertical-align:top; 
            text-align:center; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:none #000000; 
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial'; 
            font-size:11pt;  
      }
      th.style30 { 
            vertical-align:top; 
            text-align:center; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:none #000000; 
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial'; 
            font-size:11pt;  
      }
      td.style31 { 
            vertical-align:top; 
            text-align:center; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:1px solid #000000 !important; 
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial'; 
            font-size:11pt;  
      }
      th.style31 { 
            vertical-align:top; 
            text-align:center; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:1px solid #000000 !important; 
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial'; 
            font-size:11pt;  
      }
      td.style32 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:54px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:1px solid #000000 !important; 
            border-right:none #000000; 
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial'; 
            font-size:14pt; 
      }
      th.style32 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:54px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:1px solid #000000 !important; 
            border-right:none #000000; 
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial'; 
            font-size:14pt;  
      }
      td.style33 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:54px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:none #000000; 
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial'; 
            font-size:14pt;  
      }
      th.style33 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:54px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:none #000000; 
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial'; 
            font-size:14pt;  
      }
      td.style34 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:54px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:1px solid #000000 !important; 
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial'; 
            font-size:14pt; 
            background-color:#FF65FF  
      }
      th.style34 { 
            vertical-align:top; 
            text-align:left; 
            padding-left:54px; 
            border-bottom:1px solid #000000 !important; 
            border-top:1px solid #000000 !important; 
            border-left:none #000000; 
            border-right:1px solid #000000 !important; 
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial'; 
            font-size:14pt;  
      }
      table.sheet0 col.col0 { 
            width:9.48888878pt 
      }
      table.sheet0 col.col1 { 
            width:4.74444439pt 
      }
      table.sheet0 col.col2 { 
            width:90.14444341pt 
      }
      table.sheet0 col.col3 { 
            width:25.07777749pt 
      }
      table.sheet0 col.col4 { 
            width:14.23333317pt 
      }
      table.sheet0 col.col5 { 
            width:44.73333282pt 
      }
      table.sheet0 col.col6 { 
            width:14.23333317pt 
      }
      table.sheet0 col.col7 { 
            width:9.48888878pt 
      }
      table.sheet0 col.col8 { 
            width:60.32222153pt 
      }
      table.sheet0 col.col9 { 
            width:150.46666494pt 
      }
      table.sheet0 col.col10 { 
            width:9.48888878pt 
      }
      table.sheet0 tr { 
            height:13.636363636364pt 
      }
      table.sheet0 tr.row0 { 
            height:41.25pt 
      }
      table.sheet0 tr.row1 { 
            height:40.75pt 
      }
      table.sheet0 tr.row2 { 
            height:25.75pt 
      }
      table.sheet0 tr.row3 { 
            height:25pt;
      }
      table.sheet0 tr.row4 { 
            height:17.25pt 
      }
      table.sheet0 tr.row5 { 
            height:19pt 
      }
      table.sheet0 tr.row6 { 
            height:19.25pt 
      }
      table.sheet0 tr.row7 { 
            height:25.75pt 
      }
      table.sheet0 tr.row8 { 
            height:75pt 
      }
      table.sheet0 tr.row9 { 
            height:11.75pt 
      }
      table.sheet0 tr.row10 { 
            height:22.5pt 
      }
      table.sheet0 tr.row11 {
            height:18pt 
      }
      table.sheet0 tr.row12 { 
            height:16.75pt 
      }
      table.sheet0 tr.row13 { 
            height:16.75pt 
      }
      table.sheet0 tr.row14 { 
            height:17pt 
      }
      table.sheet0 tr.row15 { 
            height:16.75pt 
      }
      table.sheet0 tr.row16 { 
            height:129.25pt 
      }
      table.sheet0 tr.row17 { 
            height:41.5pt 
      }
      table.sheet0 tr.row18 { 
            height:33pt 
      }
      table.sheet0 tr.row19 { 
            height:40.75pt 
      }
      table.sheet0 tr.row20 { 
            height:25.75pt 
      }
      table.sheet0 tr.row21 { 
            height:25pt 
      }
      table.sheet0 tr.row22 { 
            height:17.25pt 
      }
      table.sheet0 tr.row23 { 
            height:19pt 
      }
      table.sheet0 tr.row24 { 
            height:19.25pt 
      }
      table.sheet0 tr.row25 { 
            height:25.75pt 
      }
      table.sheet0 tr.row26 { 
            height:75pt 
      }
      table.sheet0 tr.row27 { 
            height:11pt 
      }
      table.sheet0 tr.row28 { 
            height:22.5pt 
      }
      table.sheet0 tr.row29 { 
            height:18pt 
      }
      table.sheet0 tr.row30 { 
            height:16.75pt 
      }
      table.sheet0 tr.row31 { 
            height:16.75pt 
      }
      table.sheet0 tr.row32 { 
            height:16.75pt 
      }
      table.sheet0 tr.row33 { 
            height:16.75pt 
      }
      table.sheet0 tr.row34 { 
            height:178.25pt 
      }
      table.sheet0 tr.row35 { 
            height:69pt 
      }
      table.sheet0 tr.row36 { 
            height:69pt 
      }
      table.sheet0 tr.row37 { 
            height:54.25pt 
      }
      table.sheet0 tr.row38 { 
            height:54.25pt 
      }
      table.sheet0 tr.row39 { 
            height:57.25pt
      }
      table.sheet0 tr.row40 { 
            height:57.25pt 
      }
      table.sheet0 tr.row41 { 
            height:50.25pt 
      }
      table.sheet0 tr.row42 { 
            height:50.25pt 
      }
      table.sheet0 tr.row43 { 
            height:42.5pt 
      }
      table.sheet0 tr.row44 { 
            height:323pt 
      }
      table.sheet0 tr.row45 { 
            height:327pt 
      }
      .sample-box {
            width: 333px;
            background-color: white;
            border: 1px solid #333;
            padding: 38px;
            text-align: center;
            font-family: Arial, sans-serif;
            margin-top: 663px;
            left: 170px;
            margin-bottom: 10px;
            position: absolute;
            top: 10%;
            background-color: transparent;            
      }
      .sample-box1 {
            width: 333px;
            background-color: transparent;
            border: 1px solid #333;
            padding: 38px;
            text-align: center;
            font-family: Arial, sans-serif;
            margin-top: 670px;
            left: 170px;
            margin-bottom: 10px;
            position: absolute;
            top: -4%;
      }
      .sample-box2 {
            width: 332px;
            border: 1px solid #333;
            padding: 48.9px;
            text-align: center;
            font-family: Arial, sans-serif;
            margin-top: 755px;
            left: 618px;
            margin-bottom: 10px;
            position: absolute;
            top: -17.8%;
            background-color: transparent;
      }
      .sample-box3 {
            width: 150px;
            background-color: transparent;
            border: 1px solid #333;
            padding: 31px;
            text-align: center;
            font-family: Arial, sans-serif;
            margin-top: 856px;
            left: 618px;
            margin-bottom: 10px;
            position: absolute;
            top: -17.8%;
      }
      .sample-box4{
            width: 150px;
            background-color: transparent;
            border: 1px solid #333;
            padding: 31px;
            text-align: center;
            font-family: Arial, sans-serif;
            margin-top: 856px;
            left: 836px;
            margin-bottom: 10px;
            position: absolute;
            top: -17.8%;
      }
      .logo {
            position: absolute; 
            top: 275px; 
            width: 40%; 
            left: 340px;  
            opacity: 0.3;
      }
      .fas {
            font-size: 28px; 
            position: relative; 
            left: 275px; 
            top: -11px;'
      }
      .fasfa{
            font-size: 28px; 
            position: relative; 
            left: 232px; 
            top: -7px;' 
      }
      .contact{
            position: absolute; 
            left: 309px; 
            top: 219px;
      }
      .date1{
            font-weight:bold; 
            color:#000000; 
            font-family:'Calibri'; 
            font-size:7pt;  
            position: absolute; 
            top: 618px; 
            left: 37px;
      }
      .dispatcher{
            font-weight:bold; 
            color:#000000; 
            font-family:'Calibri';
            font-size:7pt; 
            position: absolute; 
            top: 599px; 
            left: 142px;
      }
      .reco{
            font-weight:bold; 
            color:#000000; 
            font-family:'Calibri'; 
            font-size:6pt; 
            position: absolute; 
            top: 650px; 
            left: 34px;
      }
      .head {
            font-weight:bold; 
            color:#000000; 
            font-family:'Calibri'; 
            font-size:6pt; 
            position: absolute; 
            top: 697px; 
            left: 145px;
      }
      .onduty{
            font-weight:bold; 
            color:#000000; 
            font-family:'Calibri'; 
            font-size:7pt; 
            position: absolute; 
            top: 609px; 
            left: 600px;
      }
      .forissuance{
            font-weight:bold; 
            color:#000000; 
            font-family:'Calibri'; 
            font-size:6pt;
            position: absolute; 
            top: 660px; 
            left: 480px;
      }
      .hrmo {
            font-weight:bold; 
            color:#000000; 
            font-family:'Calibri'; 
            font-size:6pt;
            position: absolute; 
            top: 700px; 
            left: 530px;
      }
      .mayors{
            font-weight:bold; 
            color:#000000; 
            font-family:'Calibri'; 
            font-size:6pt;
            position: absolute; 
            top: 660px; 
            left: 700px;
      }
      .nameandsign {
            font-weight:bold; 
            color:#000000; 
            font-family:'Calibri'; 
            font-size:6pt;
            position: absolute; 
            top: 698px; 
            left: 750px;
      }
      .date2{
            font-weight:bold; 
            color:#000000; 
            font-family:'Calibri'; 
            font-size:7pt; 
            position: absolute; 
            top: 632px; 
            left: 53%;
      }
      .noted{
            font-weight:bold; 
            color:#000000; 
            font-family:'Calibri'; 
            font-size:7pt;
            position: absolute;
            top: 71.5%; 
            left: 53%;
      }
      .recipient{
            font-weight:bold; 
            color:#000000; 
            font-family:'Arial'; 
            font-size:14pt;
      }
      @media print{
            .logo {
                  position: absolute; 
                  top: 285px; 
                  width: 60%; 
                  left: 167px;  
                  opacity: 0.3;
            }
            .fas {
                  font-size: 28px; 
                  position: absolute; 
                  left: 145px; 
                  top: 55px;'
            }
            .fasfa{
                  font-size: 28px; 
                  position: relative; 
                  left: 99px; 
                  top: -6px;' 
            }
            .contact{
                  position: absolute; 
                  left: 178px; 
                  top: 205px;
            }
            .sample-box1 {
                  width: 130px;
                  background-color: transparent;
                  border: 1px solid #333;
                  padding: 38px;
                  text-align: center;
                  font-family: Arial, sans-serif;
                  left: 158px;
                  margin-bottom: 10px;
                  position: absolute;
                  top: -4%;
            }
            .sample-box {
                  width: 130px;
                  background-color: white;
                  border: 1px solid #333;
                  padding: 38px;
                  text-align: center;
                  font-family: Arial, sans-serif;
                  left: 158px;
                  margin-bottom: 10px;
                  position: absolute;
                  top: 5%;
                  background-color: transparent;            
            }
            .date1{
                  font-weight:bold; 
                  color:#000000; 
                  font-family:'Calibri'; 
                  font-size:7pt;  
                  position: absolute;
                  top: 600px; 
                  left: 25px;    
            }
            .dispatcher{
                  top: 585px; 
                  left: 50px;
            }
            .reco{
                  top: 630px; 
                  left: 25px;
            }
            .head {
                  top: 680px; 
                  left: 50px;
            }
            .sample-box2 {
                  width: 170px;
                  left: 375px;
                  top: -12.8%;
                  border: 1px solid #333;
                  padding: 42.9px;
                  text-align: center;
                  font-family: Arial, sans-serif;
                  margin-top: 755px;
                  margin-bottom: 10px;
                  position: absolute;
                  background-color: transparent;
            }
            .onduty{
                  top: 580px; 
                  left: 270px;
            }
            .sample-box3 {
                  width: 65px;
                  left:375px;
                  top: -13.6%;
                  background-color: transparent;
                  border: 1px solid #333;
                  padding: 31px;
                  text-align: center;
                  font-family: Arial, sans-serif;
                  margin-top: 856px;
                  margin-bottom: 10px;
                  position: absolute;
            }
            .forissuance{
                  font-weight:bold; 
                  color:#000000; 
                  font-family:'Calibri'; 
                  font-size:6pt;
                  position: absolute; 
                  top: 635px; 
                  left: 240px;
            }
            .hrmo {
                  font-weight:bold; 
                  color:#000000; 
                  font-family:'Calibri'; 
                  font-size:6pt;
                  position: absolute; 
                  top: 680px; 
                  left: 243px;
            }
            .mayors{
                  font-weight:bold; 
                  color:#000000; 
                  font-family:'Calibri'; 
                  font-size:6pt;
                  position: absolute; 
                  top: 635px; 
                  left: 375px;
            }
            .nameandsign {
                  font-weight:bold; 
                  color:#000000; 
                  font-family:'Calibri'; 
                  font-size:6pt;
                  position: absolute; 
                  top: 680px; 
                  left: 395px;
            }
            .sample-box4 {
                width: 60px;
                background-color: transparent;
                border: 1px solid #333;
                padding: 31px;
                font-family: Arial, sans-serif;
                left: 508px;
                margin-bottom: 10px;
                position: absolute;
                top: -13.6%;
            }
            .date2{
                  font-weight:bold; 
                  color:#000000; 
                  font-family:'Calibri'; 
                  font-size:7pt; 
                  position: absolute; 
                  top: 610px; 
                  left: 48%;
            }
            .noted{
                  font-weight:bold; 
                  color:#000000; 
                  font-family:'Calibri'; 
                  font-size:7pt;
                  position: absolute;
                  top: 71.5%; 
                  left: 48%;
            }
            .recipient{
                  font-weight:bold; 
                  color:#000000; 
                  font-family:'Arial'; 
                  font-size:12pt;
            }
            table.sheet0 tr.row3 { 
                  height:15pt;
            }
      }
</style>
<section class="content">
      <div class="container-fluid">
            <div class="card card-info">
                  <div class="card-body">
                        <div class="row">
                              <div class="col-md-12">
                                    <table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines" style="position: relative; left: 130px; width: 70%; border:3px solid; top: 81px;">
                                          <col class="col0">
                                          <col class="col1">
                                          <col class="col2">
                                          <col class="col3">
                                          <col class="col4">
                                          <col class="col5">
                                          <col class="col6">
                                          <col class="col7">
                                          <col class="col8">
                                          <col class="col9">
                                          <col class="col10">
                                          <tbody>
                                                <tr class="row0" >
                                                      <td class="column0 style27 s style28" colspan="11"><span style="font-weight:bold; font-style:italic; color:#000000; font-family:'Calibri'; font-size:8pt"><b>Republic of the Philippines</b> <br>Province of Southern Leyte <br>City of Maasin</span></td>
                                                </tr>
                                                      <img src="{{asset('assets/img/MaasinCity.png')}}" class="logo">
                                                <tr class="row1">
                                                      <td class="column0 style5 s style7" colspan="5"><span style="font-weight:bold; color:#000000; font-family:'Arial'; font-size:12pt">Dispatch #<br/>
                                                            <i class='fas'>&#x279E;</i>
                                                            </span><span style="font-weight:bold; color:#000000; font-family:'Arial'; font-size:6pt; position: absolute; left: 50px;">Office-Year-Month-0000</span>
                                                      </td>
                                                      <td class="column5 style5 null style7" colspan="4">{{ $dispatches->DispatchNumber}}</td>                
                                                      <td class="column9 style8 s style9" colspan="2">
                                                            <span style="font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt">Trip Ticket No:</span>
                                                            {{ $dispatches->TripTicketNumber}}
                                                      </td>
                                                </tr>
                                                <tr class="row2">
                                                      <td class="column0 style10 s style12" colspan="5"><span style="font-weight:bold; color:#000000; font-family:'Arial'; font-size:12pt;">Date:</span>                  <i class='fasfa'>&#x279E;</i>

                                                      </td>
                                                      <td class="column5 style5 null style7" colspan="6">{{ $dispatches->Date}}
                                                      </td>
                                                </tr>
                                                <tr class="row3">
                                                      <td class="column0 style32 s style34" colspan="11"><span class="recipient">RECIPIENT/PATIENT/REQUESTING PARTY DETAILS</span></td>
                                                </tr>
                                                <tr class="row4">
                                                      <td class="column0 style10 s style12" colspan="5"><span style="font-weight:bold; color:#000000; font-family:'Arial'; font-size:12pt">Name:</span>
                                                      </td>
                                                      <td class="column5 style13 null style15" colspan="6">{{ $dispatches->Name}}</td>
                                                </tr>
                                                <tr class="row5">
                                                      <td class="column0 style10 s style12" colspan="5"><span style="font-weight:bold; color:#000000; font-family:'Arial'; font-size:12pt">Address:</span></td>
                                                      <td class="column5 style13 null style15" colspan="6">{{ $dispatches->Address}}</td>
                                                </tr>
                                                <tr class="row6">
                                                      <td class="column0 style10 s style12" colspan="5"><span style="font-weight:bold; color:#000000; font-family:'Arial'; font-size:12pt; ">Contact #:</span><p class="contact">{{ $dispatches->ContactNumber}}</p></td>
                                                      <td class="column5 style29 s style31" colspan="6"><span style="font-weight:bold; color:#000000; font-family:'Arial'; font-size:11pt">Office Name:</span>{{ $dispatches->Office}}</td>
                                                </tr>
                                                <tr class="row7">
                                                      <td class="column0 style16 null style19" colspan="2" rowspan="9"></td>
                                                      <td class="column2 style5 s style7" colspan="8"><span style="font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt">Description of Dispatch </span><span style="color:#000000; font-family:'Arial'; font-size:6pt">[Provide a brief description of the dispatch, including any relevant details or special instructions</span><span style="color:#000000; font-family:'Arial'; font-size:7pt; ">.]</span></td>
                                                      <td class="column10 style20 null style21" rowspan="9"></td>
                                                </tr>
                                                <tr class="row8">
                                                      <td class="column2 style5 null style7" colspan="8">
                                                            <div class="input-field mt-0 mb-0">
                                                                  {{ $dispatches->DescriptionofDispatch}}
                                                            </div>
                                                      </td>
                                                </tr>
                                                <tr class="row9">
                                                      <td class="column2 style22 null style24" colspan="6"></td>
                                                      <td class="column8 style22 null style24" colspan="2"></td>
                                                </tr>
                                                <tr class="row10">
                                                      <td class="column2 style5 s style7" colspan="6"><span style="font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt">Dispatch Vehicle:<br />
                                                            </span><span style="font-weight:bold; color:#000000; font-family:'Arial'; font-size:6pt">Indicate Plate Number/ Conduction Sticker</span>
                                                      </td>
                                                      <td class="column8 style13 null style15" colspan="2">{{ $dispatches->PlateNumber}}</td>
                                                </tr>
                                                <tr class="row11">
                                                      <td class="column2 style8 s style9" colspan="8"><span style="font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt">Responding Personnel (Indicate Complete Name)</span></td>
                                                </tr>
                                                <tr class="row12">
                                                      <td class="column2 style8 s style9" colspan="2"><span style="font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt">Driver:</span></td>
                                                      <td class="column4 style13 null style15" colspan="6">{{ $dispatches->Driver}}</td>
                                                </tr>
                                                <tr class="row13">
                                                      <td class="column2 style8 s style9" colspan="2"><span style="font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt">Passenger/Crew:</span></td>
                                                      <td class="column4 style13 null style15" colspan="6">{{ $dispatches->Passenger}}</td>
                                                </tr>
                                                <tr class="row14">
                                                      <td class="column2 style13 null style15" colspan="2"></td>
                                                      <td class="column4 style13 null style15" colspan="6"></td>
                                                </tr>
                                                <tr class="row15">
                                                      <td class="column2 style13 null style15" colspan="2"></td>
                                                      <td class="column4 style13 null style15" colspan="6"></td>
                                                </tr>
                                                <tr class="row16">
                                                      <td class="column0 style1 null"></td>
                                                      <td class="column1 style2 null"></td>
                                                      <td class="column2 style26 s style26" colspan="6"><span class="dispatcher">NAME AND SIGNATURE OF DISPATCHER<br/>
                                                            </span><span class="date1">DATE:<br />
                                                            </span><span class="reco">RECOMMENDED FOR ISSUANCE OF TRAVEL ORDER:<br />
                                                            </span><span class="head">NAME AND SIGNATURE HEAD OF OFFICE</span>
                                                      </td>
                                                      <td class="column8 style6 s style6" colspan="2"><span class="noted">NOTED:<br />
                                                            </span><span class="onduty">NAME AND SIGNATURE OF TEAM LEADER ON DUTY<br />
                                                            </span><span class="date2">DATE:<br />
                                                            </span><span class="forissuance">FOR ISSUANCE OF TRAVEL ORDER:        <br />
                                                            </span><span class="mayors">  RECEIVED AT THE MAYORS OFFICE:       <br />
                                                            </span><span class="hrmo"><sup>NAME AND SIGNATURE HRMO PERSONNEL </sup></span><span class="nameandsign">NAME AND SIGNATURE</span>
                                                      </td>
                                                      <td class="column10 style3 null"></td>
                                                </tr>
                                                <div class="sample-box"></div>
                                                <div class="sample-box1"></div>
                                                <div class="sample-box2"></div>
                                                <div class="sample-box3"></div>
                                                <div class="sample-box4"></div>
                                                <tr class="row17">
                                                      <td class="column0 style4 null"></td>
                                                      <td class="column1 style5 s style7" colspan="10"><span style="font-weight:bold; color:#FF0000; font-family:'Calibri';font-size:5pt; ">For Emergency Conduction<br />
                                                      </span><span style="font-weight:bold; color:#FF0000; font-family:'Calibri'; font-size:5pt; ">1.             This dispatch ticket must be endorsed to the City Mayors Office for Issuance of Travel Order the following day after the emergency travel outside Maasin City (for emergency travel falling on a 4-12, 12-8 shift on a weekdays is conducted, otherwise travel order otherwise responders and dispatch will be ask a written explanation.<br />
                                                      </span><span style="font-weight:bold; color:#FF0000; font-family:'Calibri'; font-size:5pt">2.             If conduction falls on a Friday (especially 4-12, 12-8  shift), Saturday, Sunday. This dispatch ticket should be forwarded the first working day after the weekend.</span></td>
                                                </tr>
                                          </tbody>
                                    </table>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</section>