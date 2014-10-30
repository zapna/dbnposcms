<script>
  $().ready(function() {
      $('#optgroup').multiSelect({ selectableOptgroup: true,
         selectableHeader: "<div class='custom-header'>Available</div>",
         selectionHeader: "<div class='custom-header'>Included</div>"
     });
//      $("#frmAddRole").validate();
//      
//      if($(".chkboxes").length == $(".chkboxes:checked").length) {
//            $("#selectAll").attr("checked", "checked");
//        } else {
//            $("#selectAll").removeAttr("checked");
//        }
//        
//      $("#selectAll").click(function(){
//            $(".chkboxes").prop("checked",$("#selectAll").prop("checked"))
//       }) 
//       $(".chkboxes").click(function(){ 
//            if($(".chkboxes").length == $(".chkboxes:checked").length) {
//                $("#selectAll").attr("checked", "checked");
//            } else {
//                $("#selectAll").removeAttr("checked");
//            }
//      });
  });
  
</script>
<div class="itemslist">
<!--<h1 class="items-head">Items List <button type="button" class="btn btn-xs btn-primary">Add Item</button></h1>-->
<h1 class="items-head list-page"><img src="<?php echo sfConfig::get('app_web_url').'images/role_edit_title.png'?>" />&nbsp;<span>Add Role</span></h1>
<form name="frmAddRole" action="" method="post" id="frmAddRole">
<div  class="backimgDiv">
    <input type="button" onclick="document.location.href='<?php echo sfConfig::get("app_admin_url");?>role/index';" value="Cancel" class="btn btn-cancel"/>
    <button type="submit" class="btn btn-primary">&nbsp;Save&nbsp;</button>
</div>
<div class="regForm listviewpadding"><br />
    <?php if ($sf_user->hasFlash('access_error')): ?>
    <div class="alert alert-warning">
        <?php echo $sf_user->getFlash('access_error') ?>
    </div>
    <?php endif;?>

    <table class="table table-striped">
    <tbody>
        <tr><th class="lbl"><strong>Role *</strong></th><th><input type="text" name="roleName" class="form-control" required value="" /></th></tr>
        <tr><th colspan="2" class="permissionlbl"><strong>Permissions </strong></th></tr>
        <tr><td colspan="2" class="permissionstd">
          <div class="seldesAll"> 
<!--              <label class="per">
                  <input type="checkbox" name="" id="selectAll" />&nbsp;Select All                      
              </label>-->
          </div> 
                
                <select id='optgroup' multiple='multiple' name="permissions[]">
  

         <?php

 
            foreach($modules as $module){ ?>
                 <optgroup label='<?php echo $module->getTitle();?>'>
                       <?php
                    $cp = new Criteria();
                    $cp->add(PermissionPeer::MODULE_ID,$module->getId());
                    $cp->addAscendingOrderByColumn(PermissionPeer::POSITION);
                    $permissions = PermissionPeer::doSelect($cp);
                    ?>
                    <?php
                    foreach($permissions as $permission){ ?>
                     
                      <option value='<?php echo $permission->getId()?>'><?php echo $permission->getActionTitle()?></option>
                        <?php   }       ?>
                 </optgroup>
            <?php  } ?>
                
                
                
               </select> 
                
        </td></tr>
       
    </tbody>
    </table>
    <p>&nbsp;</p><p>&nbsp;</p>

</div></form>
</div>
 