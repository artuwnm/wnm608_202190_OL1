
const showResults = d => {
    $(".promotion-list").html(
        d.error?d.error:
        d.result.length?listPromotionItemTemplate(d.result):
        'No Result');
}

const queryAllPromotion = () => {
    query({type:'product_sort',column:'date_create',dir:'ASC',limit:4}).then(showResults);
}