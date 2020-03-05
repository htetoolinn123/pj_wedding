$(document).ready(function(){
			showmyitem();
			$('.detail').click(function(){
				$.ajaxSetup({
				    headers: {
				        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				    }
				});
				var id = $(this).data('id');
				var pname = $(this).data('name');
				var pid=$(this).data('pid');
				//alert(pid);
				$.post("/itembyservice",{id:id,pname:pname,pid:pid},function(res){
						//console.log(res);
					var html="";
					var paginate=res.links;
					$.each(res,function(i,v){
						var rphoto = v.photo;
						var rname = v.name
						var rid = v.id;
						var rprice = v.price;
						var service_id=v.service_id;
						html +=`
							<div  class=" text-center col-lg-4 col-md-6 col-sm-12 my-3 card1  row ml-1 mt-5 mb-5">
								<div id="box" class=" card  ml-4" style="width: 18rem;">
								  <img src="${v.photo}" class="card-img-top" class="img-fluid" hight="100px" alt="...">
								  <div class="card-body">
								    <h5 class="card-title">${v.name}</h5>
								    <p class="card-text">Price :&nbsp;${v.price}&nbsp; MMK</p>
								  </div>
								  <div class="card-footer text-muted">`

								  if(service_id==2){
								  	html+= `<input class="form-check-input addtocart" type="radio" id="inlineCheckbox1" value="${v.id}" data-id="${v.id}" data-photo="${v.photo}" data-price="${v.price}" data-name="${v.name}" name="hall">
  										<label class="form-check-label" for="inlineCheckbox1">BOOk</label>`
  									}else{
								  html+= `<input class="form-check-input addtocart" type="checkbox" id="inlineCheckbox1" value="${v.id}" data-id="${v.id}" data-photo="${v.photo}" data-price="${v.price}" data-name="${v.name}">
  										<label class="form-check-label" for="inlineCheckbox1">BOOk</label>`
  									}

								 html+= `</div>
								</div>
							</div>`;
      			

					})
					$('.showitem').html(html);
					

				})

			})
			showmyitem();
			$(".showitem").on('click', '.addtocart', 
				function(){
				var id = $(this).data('id');
				var name = $(this).data('name');
				var price = $(this).data('price');
				var photo = $(this).data('photo');
				//console.log(id,name,price,photo);
				var item = {
					id:id,
					name:name,
					price:price,
					photo:photo,
				}
				var itemString = localStorage.getItem("items");
				var itemArray
				if(itemString == null){
					itemArray = Array();
				}else{
					itemArray = JSON.parse(itemString);
				}
				itemArray.push(item);

				var itemData = JSON.stringify(itemArray);
				localStorage.setItem("items",itemData);
			})

			function showmyitem(){
				var itemString = localStorage.getItem("items");
				if(itemString){
					var itemArray = JSON.parse(itemString);
				}
				// console.log(itemArray);
				var html =''; var j=1; var total=0;
				var finalprice = 0;
				var bookingcart = 0;

				$.each(itemArray,function(i,v){
					var id = v.id;
					var name = v.name;
					var photo = v.photo;
					var price =v.price;
					var t_price = parseInt(price);
					
					 total+=t_price;
					finalprice=finalprice+total
					html+=`
					<tr>
						<td>${j}</td>
						<td>${name}</td>
						<td><img src="${photo}" width="50"></td>
						<td>${price}&nbsp;MMK</td>
					</tr>`
					j++;
				})
					console.log(total);

				$("tbody").html(html);
				$('#total').text(total);
			}
		})