<!-- <div class="no-gutter">
	<div class="col-lg-4 col-sm-6">
		<a href="#" class="portfolio-box">
			<img src="images/portfolio-1.jpg" class="img-responsive" alt="">
			<div class="portfolio-box-caption">
				<div class="portfolio-box-caption-content">
					<div class="project-category text-faded">
						Category
					</div>
					<div class="project-name">
						Project Name
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col-lg-4 col-sm-6">
		<a href="#" class="portfolio-box">
			<img src="images/portfolio-2.jpg" class="img-responsive" alt="">
			<div class="portfolio-box-caption">
				<div class="portfolio-box-caption-content">
					<div class="project-category text-faded">
						Category
					</div>
					<div class="project-name">
						Project Name
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col-lg-4 col-sm-6">
		<a href="#" class="portfolio-box">
			<img src="images/portfolio-3.jpg" class="img-responsive" alt="">
			<div class="portfolio-box-caption">
				<div class="portfolio-box-caption-content">
					<div class="project-category text-faded">
						Category
					</div>
					<div class="project-name">
						Project Name
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col-lg-4 col-sm-6">
		<a href="#" class="portfolio-box">
			<img src="images/portfolio-4.jpg" class="img-responsive" alt="">
			<div class="portfolio-box-caption">
				<div class="portfolio-box-caption-content">
					<div class="project-category text-faded">
						Category
					</div>
					<div class="project-name">
						Project Name
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col-lg-4 col-sm-6">
		<a href="#" class="portfolio-box">
			<img src="images/portfolio-5.jpg" class="img-responsive" alt="">
			<div class="portfolio-box-caption">
				<div class="portfolio-box-caption-content">
					<div class="project-category text-faded">
						Category
					</div>
					<div class="project-name">
						Project Name
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col-lg-4 col-sm-6">
		<a href="#" class="portfolio-box">
			<img src="images/portfolio-6.jpg" class="img-responsive" alt="">
			<div class="portfolio-box-caption">
				<div class="portfolio-box-caption-content">
					<div class="project-category text-faded">
						Category
					</div>
					<div class="project-name">
						Project Name
					</div>
				</div>
			</div>
		</a>
	</div>
</div> -->

<?php
       
          
          $caminho = "images/album-slide1/";
            $dir = opendir($caminho);
            $count = 0;
            $countitem = 0;
           
            while ( ($imagem = readdir($dir)) !== false )
            {
                 $group="group".$count;
               $caminho_completo = $caminho.$imagem;
               
               if (is_file($caminho_completo) && $imagem != "." && $imagem != ".."){
                 $item = "images/album{$count}/";
                $dir_item = opendir($item);

                echo "<div class='col-sm-6 col-md-4'>
                        <div class='thumbnail'>
                       <img src ='{$caminho_completo}' class='myphotos' rel='{$group}' data-glisse-big='{$caminho_completo}' title='Click para visualizar o Album{$count}' />
                        </div>
                    </div>";
                 
                   while ( ($item_imagem = readdir($dir_item)) !== false )
                    {
       
                       $caminho_item_completo = $item.$item_imagem;
                       if (is_file($caminho_item_completo) && $item_imagem != "." && $item_imagem != ".."){
                            echo "<img src='' class='myphotos' rel='{$group}' data-glisse-big='{$caminho_item_completo}'/>";
                       }
                     $countitem++;  
                   //  echo "<script>alert('$caminho_item_completo');</script>";
                   }
                  
         $count++;
               }
            }
            closedir($dir_item);
            closedir($dir);
            
            
        ?>

	