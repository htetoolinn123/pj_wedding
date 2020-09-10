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
				var packagename=$(this).data('packagename');
				var pid =$(this).data('pid');
				//alert(pid);
				$.post("/itembyservice",{id:id,pname:pname,packagename:packagename,pid:pid},function(res){
						//console.log(res);
					var html="";
					var paginate=res.links;
					
					$.each(res.item,function(i,v){
						var rphoto = v.photo;
						var rname = v.name
						var rid = v.id;
						var rprice = v.price;
						var service_id=v.service_id;
						var pid = res.pid;
						html +=`
							<div  class=" text-center col-lg-4 col-md-6 col-sm-12 my-3 card1  row ml-1 mt-5 mb-5">
								<div id="box" class=" card  ml-4" style="width: 18rem;">
								  <label class="form-check-label" for="${v.id}">
								  <img src="${v.photo}"  class="card-img-top" class="img-fluid" hight="100px" alt="...">
								  </label>
								  <div class="card-body">
								    <h5 class="card-title">${v.name}</h5>
								    <p class="card-text">Price :&nbsp;${v.price}&nbsp; MMK</p>
								  </div>
								  <div class="card-footer text-muted">`

								  if(service_id==1){
								  	html+= `<input class="form-check-input addtocartr " type="radio"  id="${v.id} " value="${v.id}" data-pid="${pid}" data-id="${v.id}" data-photo="${v.photo}" data-price="${v.price}" data-name="${v.name}"  name="hall">
  										<label class="form-check-label" for="${v.id}">BOOK</label>`
  									}else{
								  html+= `<input class="form-check-input addtocart " type="checkbox"  id="${v.id}" value="${v.id}" data-pid="${pid}" data-id="${v.id}" data-photo="${v.photo}" data-price="${v.price}" data-name="${v.name}">
  										<label class="form-check-label" for="${v.id}">BOOK</label>`
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
				var checkstatus=this.checked;
				//alert(checkstatus);
				if(checkstatus==true){
					var id = $(this).data('id');
				var name = $(this).data('name');
				var price = $(this).data('price');
				var photo = $(this).data('photo');
				var pid = $(this).data('pid');
				
				var item = {
					id:id,
					name:name,
					price:price,
					photo:photo,
					qty:1,
					pid:pid
				};

				var itemString = localStorage.getItem("items");
				var itemArray
				if(itemString == null){
					itemArray = Array();
				}else{
					itemArray = JSON.parse(itemString);
				}
				var status=false;
				//var exit=false;
				$.each(itemArray,function(i,v){
					// alert(i);
						if (id==v.id) {
							status=true;
						
						}

					})

					if (!status) {
						itemArray.push(item);
					}
				

				var itemData = JSON.stringify(itemArray);
				localStorage.setItem("items",itemData);
				showmyitem();

				}else{
				var id = $(this).data('id');
				var name = $(this).data('name');
				var price = $(this).data('price');
				var photo = $(this).data('photo');
				var pid = $(this).data('pid');
				var itemString = localStorage.getItem("items");
				itemArray = JSON.parse(itemString);
				var cid;
				$.each(itemArray,function(i,v){
					// alert(i);
						if (id==v.id) {
							cid=itemArray.findIndex(element => element.id==id);
						
						}

					})
				itemArray.splice(cid,1);
				var itemData = JSON.stringify(itemArray);
				localStorage.setItem("items",itemData);
				showmyitem();

				}
				
			})

			$(".showitem").on('click', '.addtocartr', 
				function(){
				var checkstatus=this.checked;
				//alert(checkstatus);
				if(checkstatus==true){
					var id = $(this).data('id');
				var name = $(this).data('name');
				var price = $(this).data('price');
				var photo = $(this).data('photo');
				var pid = $(this).data('pid');
				
				var item = {
					id:id,
					name:name,
					price:price,
					photo:photo,
					qty:1,
					pid:pid
				};

				var itemString = localStorage.getItem("items");
				var itemArray
				if(itemString == null){
					itemArray = Array();
				}else{
					itemArray = JSON.parse(itemString);
				}
				var status=false;
				//var exit=false;
				var length=itemArray.length;
				if(length){
					var status=true;
					itemArray.splice(0,1);
					itemArray.push(item);
					}
				if(!status){
					itemArray.push(item);
				}

				var itemData = JSON.stringify(itemArray);
				localStorage.setItem("items",itemData);
				showmyitem();

				}
				
			})

			

			function showmyitem(){
				var itemString = localStorage.getItem("items");
				if(itemString){
					var itemArray = JSON.parse(itemString);
				}
				// console.log(itemArray);
				var html =''; var j=1; var total=0;
				var bookingcart = 0;

				$.each(itemArray,function(i,v){
					var id = v.id;
					var name = v.name;
					var photo = v.photo;
					var price =v.price;
					var qty =v.qty;
					var pid =v.pid;
					var t_price = parseInt(price);
					
					 total+=t_price;
					 bookingcart = bookingcart + qty;

					html+=`
					<tr>
						<td>${j}</td>
						<td>${name}</td>
						<td><img src="${photo}" width="50"></td>
						<td>${price}&nbsp;MMK</td>
						<td>
							<button class=" btn-outline-danger remove" data-id="${i}">
										<i class="fas fa-times"></i>
							</button>
						</td>

					</tr>`
					j++;
				})
					//console.log(total);
				$("tbody").html(html);
				$('#total').text(total);
				$('.bookingcart').text(bookingcart);
			}




			$("#tbody").on('click', '.remove',
			function(){
				var id =$(this).data("id");
				var ans=confirm("Are you sure delete?");
				if(ans){
					var itemString = localStorage.getItem("items");
					if(itemString){
						var itemArray=JSON.parse(itemString);
						itemArray.splice(id,1);
						var itemData = JSON.stringify(itemArray);
						localStorage.setItem("items",itemData);
						showmyitem();
					}  
				}
			})

			$("#formbody").on('click','.sendd',
				function(){
					var st =$('#st').val();
					var et =$('#et').val();
					var wd =$('#wd').val();
					var note =$('#note').val();
					var total =$('#total').text();
					var itemString = localStorage.getItem("items");
					var itemArray=JSON.parse(itemString);
					$.ajaxSetup({
				    headers: {
				        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				    }
				});
					$.post("/booking",{st:st,et:et,wd:wd,note:note,total:total,itemArray:itemArray},function(res){
						if(res){
							alert("BOOKING SUCCESSFULLY!");
							localStorage.clear();
							$("#st").val("");
							$("#et").val("");
							$("#wd").val("");
							$("#note").val("");
							showmyitem();
						}
						
					});	
				})

			$(".dd1").on('click','.back',function(){
				//alert('ok');
				var ans=confirm("Do you choose another PACKAGE?");
				if(ans){
				localStorage.clear();
				showmyitem();
				}
			})

			$("nav").on('click','.dd2',function(){
				//alert('ok');
				localStorage.clear();
				showmyitem();
			})
		})