<?php  include('server.php'); ?>
 

<link href='css/css.sass' rel='stylesheet' type='text/css'>

<div class="app-container">
  
  <nav class="nav">
    <a href="#" class="nav__logo">
     Admin
    </a>
    <ul class="nav__list">
      <li class="nav__list-item">
        <a href="#" class="nav__item-link">Dashboard</a>
      </li>
      <li class="nav__list-item nav__list-item--active">
        <a href="#" class="nav__item-link">Contacts</a>
      </li>
      <li class="nav__list-item">
        <a href="#" class="nav__item-link">Counter</a>
      </li>
      <li class="nav__list-item">
        <a href="#" class="nav__item-link">Locations</a>
      </li>
      <li class="nav__list-item">
        <a href="#" class="nav__item-link">Contracts</a>
      </li>
      <li class="nav__list-item">
        <a href="#" class="nav__item-link">Statuses</a>
      </li>
      <li class="nav__list-item">
        <a href="#" class="nav__item-link">Logout</a>
      </li>
    </ul>
  </nav>
  
  <div class="app-view">
    
    <nav class="utility-bar">
      <div class="utility-bar__inner">
        <ul class="utility-bar__list">
          <li class="utility-bar__list-item">
            <a href="#" class="utility-bar__item-link">
<!-- by Arthur Shlain https://thenounproject.com/search/?q=mail&i=396565               -->
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.2" baseProfile="tiny" x="0px" y="0px" viewBox="0 0 100 100" width="26px" xml:space="preserve"><path fill="#999" d="M10,66h16v24l24-24h40V10H10V66z M26,26h48v8H26V26z M26,42h48v8H26V42z"/></svg>
<!--               Messages -->
            </a>
          </li>
          <li class="utility-bar__list-item">
            <a href="#" class="utility-bar__item-link">
<!-- by Nick Novell https://thenounproject.com/search/?q=notification&i=430200               -->
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" fill="#999" width="20px" style="shape-rendering:geometricPrecision;text-rendering:geometricPrecision;image-rendering:optimizeQuality;" viewBox="0 0 0.276083 0.32331250000000004" x="0px" y="0px" fill-rule="evenodd" clip-rule="evenodd"><defs>
</defs><g><path class="fil0" d="M0.185915 0.247296c-0.00283406,0.024408 -0.0235765,0.0433539 -0.0487436,0.0433539 -0.0251671,0 -0.0459057,-0.0189459 -0.0487436,-0.0433539l0.0974872 0zm-0.11863 -0.198392c0.015799,-0.0138347 0.0311442,-0.0218257 0.0461308,-0.0250946 6.4844e-005,-0.0131595 0.0107527,-0.0238092 0.0239312,-0.0238092 0.0130794,0 0.0237062,0.0104933 0.0239236,0.0235193 0.0154252,0.00307055 0.0312395,0.0111227 0.047523,0.0253845 0.0264907,0.0291493 0.0340927,0.0621854 0.0291378,0.0978076 -0.00316973,0.076226 0.0178474,0.055453 0.0381511,0.0874021 -0.0460163,0 -0.0920289,0 -0.138041,0 -0.0460163,0 -0.0920289,0 -0.138041,0 0.0203038,-0.031949 0.0413171,-0.0111761 0.0381511,-0.0874021 -0.00495866,-0.0356222 0.00264335,-0.0686583 0.029134,-0.0978076z"/></g></svg>
<!--               Alerts -->
              <span class="utility-bar__indicator">3</span>
            </a>
          </li>
        </ul>
        <a href="#" class="utility-bar__account">
          <span class="utility-bar__account-avatar"></span>
          <span class="utility-bar__account-name">hello world</span>
        </a>
      </div>
    </nav>
    
    <main class="content">
      <h1>la ville </h1>  
      <br>
      <br>
      
      <a  href="insert-ville.php" > <button type="submit" class="btn" name="save">ajoute ville </button></a>
                
    	</form>
    <?php $results = mysqli_query($db, "SELECT * FROM ville"); ?>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td> <a href="phara.php "> <?php echo $row['name']; ?></td>  </a> 			
			<td>
				<a href="ville.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>


<form>
</body>
    </main>
    
  </div>
  
</div>

