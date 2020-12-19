// bat dau
 
var ketqua = document.querySelector('.ketqua');
var so = Array.from(document.querySelectorAll('.btn'));
so.forEach(function(bnt) {
	bnt.addEventListener('click', function() {
		if (ketqua.innerHTML == '0')
			ketqua.innerHTML = '';
		if (bnt.innerHTML == 'C')
			ketqua.innerHTML = '0';
		else if (bnt.innerHTML == 'DEL'){
			var arr = Array.from(ketqua.innerHTML);
			arr.splice(arr.length-1,1);
			if (arr.length != 0)
				ketqua.innerHTML = arr.join('');
			else ketqua.innerHTML = '0';
		}
		else if (bnt.innerHTML == '=') {
			ketqua.innerHTML = eval(ketqua.innerHTML);
		}
		else ketqua.innerHTML += bnt.innerHTML;
	});
})