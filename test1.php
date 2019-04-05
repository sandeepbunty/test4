 $("button#acctAddBtn").click(function(){
       
       var url = '<?php echo $this->webroot."Accounts/add/".$account["Account"]["id"] ?>';
       
       var data = $("form#AccountAddForm").serialize();
         console.log(data);

       die();

       //hide to prevent double click
       // $(this).hide();

       $.post(url,data,function(res){
       
           var indexUrl = '<?php echo $this->webroot."Accounts/index/" ?>';
           
           if(res.success == 0){
                alert(res.msg);
               $("button#acctAddBtn").show();
           }
           else if(res.success == 1){
               alert(res.msg)
               
               //redirect to index
               indexUrl += res.id;
               
               window.location.href = indexUrl;
               
          }
            
       },"json");
     
    });
