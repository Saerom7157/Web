$(document).ready(function() {
    let goodsData = [];
    let currentFilter = '';

    // JSON 파일로부터 상품 데이터를 불러오기
    function fetchGoodsData() {
        $.getJSON('goods.json', function(data) {
            goodsData = data.data;
            displayGoods(goodsData);
            populateGroupSelector(goodsData);
        });
    }

    // 상품 데이터를 HTML로 변환하여 표시
    function displayGoods(data) {
        const goodsList = $("#goods-list");
        goodsList.empty();
        
        data.forEach(function(product, index) {
            let badge = index < 3 ? '<span class="badge bg-success">BEST</span> ' : '';
            const productCard = `
                <div class="col-md-4">
                    <div class="card">
                        <img src="${product.img}" class="card-img-top" alt="${product.title}">
                        <div class="card-body">
                            <h5 class="card-title">${badge}${product.title}</h5>
                            <p class="card-text">$${product.price}</p>
                            <a href="${product.detailUrl}" class="btn btn-info">상세보기</a>
                        </div>
                    </div>
                </div>`;
            goodsList.append(productCard);
        });
    }

    // 그룹 선택기를 채우기
    function populateGroupSelector(data) {
        let groups = [...new Set(data.map(item => item.group))];
        const groupSelector = $("#group-selector");
        groupSelector.empty().append('<option value="">모든 그룹</option>');
        groups.forEach(function(group) {
            groupSelector.append(`<option value="${group}">${group}</option>`);
        });
    }

    // 정렬 및 필터링 로직
    $('#sorting-buttons button').click(function() {
        const sortType = $(this).attr('id');
        let sortedData;

        switch (sortType) {
            case 'sort-by-price-asc':
                sortedData = [...goodsData].sort((a, b) => parseFloat(a.price.replace(',', '')) - parseFloat(b.price.replace(',', '')));
                break;
            case 'sort-by-price-desc':
                sortedData = [...goodsData].sort((a, b) => parseFloat(b.price.replace(',', '')) - parseFloat(a.price.replace(',', '')));
                break;
            case 'sort-by-sales-asc':
                sortedData = [...goodsData].sort((a, b) => a.sale - b.sale);
                break;
            case 'sort-by-sales-desc':
                sortedData = [...goodsData].sort((a, b) => b.sale - a.sale);
                break;
        }

        displayGoods(currentFilter ? sortedData.filter(item => item.group === currentFilter) : sortedData);
    });

    $('#group-selector').change(function() {
        currentFilter = $(this).val();
        let filteredData = currentFilter ? goodsData.filter(item => item.group === currentFilter) : goodsData;
        displayGoods(filteredData);
    });

    fetchGoodsData();
});
