angular.module('starter.services', [])

.service('APIInterceptor', function ($rootScope, $q) {
        var service = this;

        service.responseError = function (response) {
            if (response.status === 401) {
                $rootScope.$broadcast('unauthorized');
            }
            return $q.reject(response);
        };
    })

/*Service for the category controller*/
.service('itemsService', function ($http, Backand, $filter) {
  var baseUrl = '/1/objects/';
  //var objectName = 'category/';
  var selected = [];
  var selected_item = [];
  var list_data = [];
  var list_det = [];

  function getUrl(objectName) {
    return Backand.getApiUrl() + baseUrl + objectName;
  }

  getTodos = function () {
    return $http.get(getUrl('category/'));
  };

  saveList = function (data) {
    list_data = data;
  };

  savedetList = function (data) {
    list_det = data;
  };

  getSavedList = function(){
    return list_data;
  };

  getSavedDetList = function(){
    return list_det;
  };

  selectedItem = function (id) {
    var index = selected_item.indexOf(id);
    if (index > -1)
        selected_item.splice(index, 1);
    else
        selected_item.push(id);
  };

  getItemDetails = function(id){
    id = id.toString();
    console.log(id);
    return $http({
            method: 'GET',
            url: getUrl('item/'),
            params: {
                filter: JSON.stringify([{
                    fieldName: "item_id",
                    operator: "equals",
                    value: id
                }])
            }
        });
  };

  getDishes = function(){
    return $http.get(getUrl('item/'));
  };

  selectedDish = function (id) {
    var index = selected.indexOf(id);
    if (index > -1)
        selected.splice(index, 1);
    else
        selected.push(id);
  };

  getRestaurants = function(){
    return $http.get(getUrl('restaurants/'));
  };

  getItems = function(id){
    id = id.toString();
    return $http({
            method: 'GET',
            url: getUrl('rest_items/'),
            params: {
                filter: JSON.stringify([{
                    fieldName: "rest_id",
                    operator: "equals",
                    value: id
                }])
            }
        });
  };

  placeOrder = function(data, item){
    console.log(data);
    data.item_id = item.item_id;
    data.cost = item.cost;
    data.quantity = 1;
    return $http.post(getUrl('orders/'), data);
  };

  getSelectedDishes = function(){
    var selected_dishes = [];
    var i;
    var data = [];
    for(i=0;i<selected.length;i++){
      data = data.concat($filter('filter')(list_data, {id:selected[i]}));
      }
    return data;
  };

  getSelectedItems = function(){
    var selected_dishes = [];
    var i;
    var data = [];
    for(i=0;i<selected_item.length;i++){
      data = data.concat($filter('filter')(list_det, {id:selected_item[i]}));
      }
    return data;
  };

  getTotalCost  = function(data){
    var i, cost = 0;
    for (i = 0; i < data.length; i++) {
    data += data[i].id;
  }
  console.log(cost*100);
  };

  return {
    getTodos: getTodos,
    selectedDish: selectedDish,
    getSelectedDishes: getSelectedDishes,
    saveList: saveList,
    getItems: getItems,
    getSelectedItems: getSelectedItems,
    placeOrder: placeOrder,
    savedetList: savedetList,
    selectedItem: selectedItem,
    getSavedDetList: getSavedDetList,
    getItemDetails:getItemDetails,
    getSavedList: getSavedList,
    getDishes: getDishes,
    getRestaurants: getRestaurants,
    getTotalCost: getTotalCost
  };
})

/*Service for the Signup controller*/
.service('signService', function ($http, Backand) {
  var self = this,
  baseUrl = '/1/objects/',
  objectName = 'items/';

  function getUrl() {
    return Backand.getApiUrl() + baseUrl + objectName;
  }

  function getUrlForId(id) {
    return getUrl() + id;
  }

  addMember = function (data) {
    console.log(data);
    return $http.post(getUrl(), data);
  };

  return {
    addMember: addMember,
  };
})

.service('signinService', function ($http, Backand) {
  var baseUrl = '/1/objects/';
  var objectName = 'items/';

  function getUrl() {
    return Backand.getApiUrl() + baseUrl + objectName;
  }

  function getUrlForId(id) {
    return getUrl() + id;
  }

  logining = function (data) {
    return $http({
            method: 'GET',
            url: getUrl(),
            params: {
                filter: JSON.stringify([{
                    fieldName: "email",
                    operator: "equals",
                    value: data
                }])
            }
        }).then(function (response) {
            if (response.data && response.data.data && response.data.data.length == 1){
                return response.data.data[0];
            }
        });
  };

  return {
    logining: logining,
  };
});
