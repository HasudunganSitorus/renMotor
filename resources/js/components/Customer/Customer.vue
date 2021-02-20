<template>
  <div id="customer">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Customer
            <!-- <button class="btn btn-primary pull-right">Reload <i class="fa fa-repeat"></i></button> -->
          </div>
          <div class="card-body">
            <div class="mb-2">
              <div class="row">
                <div class="col-md-2">
                  <strong>Search :</strong>
                </div>
                <div class="col-md-3">
                  <select v-model="queryField" class="form-control" name="" id="">
                    <option value="name">Name</option>
                    <option value="email">Email</option>
                    <option value="phone">Phone</option>
                    <option value="total">Total</option>
                    <option value="address">Address</option>
                  </select>
                </div>
                <div class="col-md-7">
                  <input type="text" class="form-control" v-model="query" placeholder="Search" />
                </div>
              </div>
            </div>
            <table class="table table-hover">
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Total</th>
                <th>Action</th>
              </tr>
              <tr v-for="(customer, index) in customers" :key="customer.id">
                <td>{{ index + 1 }}</td>
                <td>{{}}</td>
                <td>{{}}</td>
                <td>{{}}</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: function () {
    return {
      query: "",
      customers: [],
    };
  },

  mounted() {
    // create method for load data from api to our object
    this.loadCustomers();
  },
  // using method to get url from api and inject axios
  loadCustomers: function () {
    axios
      // fill url api for parameters
      .get("api/customer")
      // create variable for response
      .then((response) => {
        // call object for response
        this.customers = response.data.data;
      })
      // catch with function error if get error
      .catch(function (error) {
        // show error in console.log
        console.log(error);
      });
  },
};
</script>
