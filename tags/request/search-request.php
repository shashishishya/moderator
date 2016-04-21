<div class="container">
<form id="frmSearch" action="<?php echo URL_SEARCH_REQUEST ?>" method="GET">
    <div class="form-group">
    <!--
      <div class="col-md-offset-1 col-md-3" style="padding:0">
        <select class="form-control" st id="helpType" onchange="onOptionChange(this);">
                        <option value="personal" selected>Help By Meeting Personally</option>
                        <option value="internet">Help Over Internet</option>
                    </select>
      </div>
      <div class="col-md-4" style="padding:0">
          <input class="form-control" id="my-address" autocomplete="off" spellcheck="false" placeholder="I'm looking around..." >
              
          </input>
      </div>
	<div class="col-md-3" style="padding:0">
		<select class="form-control" id="Search_by">
			<option value="phone" selected>Phone</option>
			<option value="email">Email</option>	
			<option value="id">USER_ID </option>
			<option value="fname">FirstName </option>
			<option value="lname">Lastname</option>
		</select>
	</div>
        <div class="col-md-2" style="padding:0">
         <button class="btn btn-primary"  type="submit" value="search"  onClick="doSearch();" >search
                    </button> 
    </div>
-->
	<div class="col-md-3" style="padding:0">
		<input type="text" class="form-control" placeholder="check for the code">
		</input>
	</div>
	<div class="col-md-2" style="padding:0">
		<button class="btn btn-primary" type="submit" value="search">Search</button>
	</div>
    </div>
  </form>
</div>
