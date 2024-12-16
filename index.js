var product = [{
    id: 1,
    name: 'ทุเรียน',
    img: './assets/rectangle-28-hHK.png',
    infor:'Durian.html'
},{
    id: 2,
    name: 'ยางพารา',
    img: './assets/rectangle-28-e6M.png"',
    infor:'para.html'
},{
    id: 3,
    name: 'ปาล์ม',
    img: './assets/rectangle-28-HLM.png',
    infor:'plam.html'
},{
    id: 4,
    name: 'ข้าว',
    img: './assets/rectangle-28.png',
    infor:'rice.html'
},{
    id: 5,
    name: 'เงาะ',
    img: './assets/rectangle-28-rXs.png',
    infor:'rambutan.html'
},{
    id: 6,
    name: 'มังคุด',
    img: './assets/rectangle-28-7Ny.png',
    infor:'mangosteen.html'
},{
    id: 7,
    name: 'มันสำปะหลัง',
    img: './assets/rectangle-28-xDP.png',
    infor:'cassava.html'
},{
    id: 8,
    name: 'ข้าวโพด',
    img: './assets/rectangle-28-9v1.png',
    infor:'corn.html'
}]

var product;

$(document).ready(()=>{

    var html = '';
                for (let i = 0;i<product.length;i++) {
                    html += `<div class="product-item">
                                <a href="${product[i].infor}"><img class="product-img" src="${product[i].img}"/></a>
                                <p class="name-item">
                                    <a href="${product[i].infor}">${product[i].name}</a>
                                </p>
                            </div>`;
                }
                $("#productlist").html(html);


    
})

function searchsomething(eiei){
    //console.log('#'+eiei.id)
    var value = $('#'+eiei.id).val()
    console.log(value)

    var html = '';
    for (let i = 0;i<product.length;i++) {
        if(product[i].name.includes(value)){
            html += `<div class="product-item">
                        <a href="${product[i].infor}"><img class="product-img" src="${product[i].img}"/></a>
                        <p class="name-item">
                            <a href="${product[i].infor}">${product[i].name}</a>
                        </p>
                    </div>`;
        }
        if(html == ''){
            $("#productlist").html(`<p style="font-size: 36px;">ไม่พบข้อมูล</p>`);
        }else{
            $("#productlist").html(html);
        }
    }
}

