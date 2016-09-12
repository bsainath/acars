 // global variables
 var globalErrorMessage = "Please try again";

  var jq = $.noConflict(); 
 
	var Ftstatus = [
	{
	"ID": "1",
    "Name": "FT"},
	{
	"ID": "2",
    "Name": "PT"}
	];
	
	
/*the general sucess function 
*/
function PayrollSuccessFunction(resp){
	
	if(resp){
	var response= JSON.parse(resp);
	if(response.status==1){
				toastr.success(response.message);
			}else if(response.status==2){
				
				toastr.error(response.message);
				
				// calling a fetchAllEmployees function by passing the company id to refresh the dx data grid
				fetchAllEmployees(id);
			}
	}else{
		toastr.error('OOPS something went wrong please try again');
		window.location.reload();
	}
	
	
}

// this function is used fetch all the employee details for payroll screen by passing the company id to the payrolldata function and collects the data 
function fetchAllEmployees(id){
			
		var csrfToken = $('meta[name="csrf-token"]').attr("content");

		curl='payroll/payrolldata';
		$.ajax({
        url: curl,
        type: "POST",
		dataType: 'json',
        data: { c_id: id,_csrf:csrfToken },
        success: function(da){
			// calling a getpayrolldetails function by passing the employee details for dx data grid
			//console.log(da.employ);
			if(da){
				var emp= JSON.parse(da.employ);
				var suf = JSON.parse(da.suffix);
				var planclass = JSON.parse(da.planclass);
				getpayrolldetails(emp,suf,planclass,id);
			}
			
        }
    });
		}
		

// this function is used to save the record to the database by passing the company id and the data 
//to the newemployee function in the payroll controller and collects the response 
function saveRowToDatabase(info,id){
		//console.log(data);
		//return false;
	curl= "payroll/newemployee";
	
	var newdata =JSON.stringify(info.data);
	
	var csrfToken = $('meta[name="csrf-token"]').attr("content");
	
		$.ajax({
        url: curl,
        type: "POST",
        data: { newdata: JSON.parse(newdata,true), company_id: id, _csrf:csrfToken },
        success: function(resp){
			
			PayrollSuccessFunction(resp);
		
        },  error: function () { 
		
		toastr.error(globalErrorMessage);
		
		window.location.reload();
		
		}
    }); 
		
}

// this function is used to update the record to the database by passing the company id and the data 
//to the updateemployee function in the payroll controller and collects the response
function updateRowToDatabase(info,id){
		//console.log(data);
		//return false;
	curl= "payroll/updateemployee";
	
	var newdata =JSON.stringify(info.newData);

	var olddata =JSON.stringify(info.oldData);

	var csrfToken = $('meta[name="csrf-token"]').attr("content");
	
		 $.ajax({
        url: curl,
        type: "POST",
		//dataType: "json",
        data: { newdata: JSON.parse(newdata,true), olddata: JSON.parse(olddata,true), company_id: id, _csrf:csrfToken },
         success: function(resp){
			 
			PayrollSuccessFunction(resp);
		
        },  error: function () { 
		
		toastr.error(globalErrorMessage);
		
		window.location.reload();
		
		}
    }); 
		
}



// this function is used to delete the record to the database by passing the data
//to the updateemployee function in the payroll controller and collects the response
function deletePayrollEmployee(info){
	
	curl= "payroll/deletepayrollemployee";
	
	var olddata =JSON.stringify(info.data);
	
	var csrfToken = $('meta[name="csrf-token"]').attr("content");
	
		 $.ajax({
        url: curl,
        type: "POST",
		//dataType: "json",
        data: { record: JSON.parse(olddata,true), _csrf:csrfToken },
        success: function(resp){
			
			PayrollSuccessFunction(resp);
			
        },  error: function () { 
		
		toastr.error(globalErrorMessage);
		
		window.location.reload();
		
		}
	});
	
}


/**
     * This function is used to pass the employment period data of the particular employee details 
     * to the addemploymentperiod function in the payroll controller and collects the response
     */
function addEmploymentPeriod(employees,info){
	
	curl= "payroll/addemploymentperiod";
	 
	var employedetails =JSON.stringify(employees);
	
	//var employedetails = employees;
	var newdetails =JSON.stringify(info.data);

	var csrfToken = $('meta[name="csrf-token"]').attr("content");
	
	
		 $.ajax({
        url: curl,
        type: "POST",
		//dataType: "json",
        data: { employee_details: JSON.parse(employedetails,true), record: JSON.parse(newdetails,true), _csrf:csrfToken },
        success: function(resp){
			
			PayrollSuccessFunction(resp);
			
        },  error: function () { 
		
		toastr.error(globalErrorMessage);
		
		window.location.reload();
		
		}
    }); 
		
}

/**
     * This function is used to pass the employment period data of the particular employee details 
     * to the updateemploymentperiod function in the payroll controller and collects the response
     */
function updateEmploymentPeriod(info){
		//console.log(data);
		//return false;
	curl= "payroll/updateemploymentperiod";
	// console.log(employees);
//	 console.log(info);
	 var csrfToken = $('meta[name="csrf-token"]').attr("content");
	 
	var olddata =JSON.stringify(info.oldData);
	
	//var employedetails = employees;
	var newdetails =JSON.stringify(info.newData);

	//console.log(newdetails);
	
		 $.ajax({
        url: curl,
        type: "POST",
		//dataType: "json",
        data: { oldrecord: JSON.parse(olddata,true), newrecord: JSON.parse(newdetails,true), _csrf:csrfToken },
        success: function(resp){
			
			PayrollSuccessFunction(resp);
			
        },error: function () { 
		
		toastr.error(globalErrorMessage);
		
		window.location.reload();
		
		}
    }); 
			
}

/**
     * This function is used to pass the employment period data of the particular employee details 
     * to the deleteemploymentperiod function in the payroll controller and collects the response
     */
function deleteEmploymentPeriod(info){
		curl= "payroll/deleteemploymentperiod";
	// console.log(employees);
	 //console.log(info);
	 var csrfToken = $('meta[name="csrf-token"]').attr("content");
	 
	var olddata =JSON.stringify(info.data);
	
	//var employedetails = employees;
	//var newdetails =JSON.stringify(info.newData);

	//console.log(newdetails);
	
		 $.ajax({
        url: curl,
        type: "POST",
		//dataType: "json",
        data: { record: JSON.parse(olddata,true), _csrf:csrfToken },
        success: function(resp){
			
			PayrollSuccessFunction(resp);
			
        },  error: function () { 
		
		toastr.error(globalErrorMessage);
		
		window.location.reload();
		
		}
	});
	
}


	
	function getpayrolldetails(employees,suffix,planclasses,encoded_company_id){
		
		jq("#gridContainer").dxDataGrid({
					dataSource:{ store: {
            type: "array",
         //   key: "ID",
		
            data: employees
        },
		},
		 showColumnLines: false,
    showRowLines: true,
  //  rowAlternationEnabled: true,
    showBorders: true,
				sorting: {
					mode:"multiple"
				},selection: {
        // ...
	//	dataSource:"always",
       //mode:"multiple"
    }, paging:{
		// pageSize:2
	},
	"export": {
        enabled: true,
        fileName: "Employees",
      //  allowExportSelectedData: true
    },
	columnAutoWidth: true,
				allowColumnReordering:true,
				allowColumnResizing:true,
				filterRow: {
					visible:false
				},
				groupPanel:{
					visible:false
				},
				editing : {
				 allowUpdating: true,
				allowDeleting: true,
				allowAdding: true,
				mode :"batch",
				},
				 onRowUpdating: function (info) {
					
				updateRowToDatabase(info,encoded_company_id);
				},
	 onRowInserting: function (info) {
		 console.log(info.component.refresh());
	// saveRowToDatabase(info,encoded_company_id);
    },
//	onRowInserted: function (newRow) { },
	onRowRemoving: function (info) {
        deletePayrollEmployee(info);
    },
	onEditorPreparing: function(e) {
    if (e.parentType == 'zip') {
        e.editorOptions.maxLength = 5;
    }
},
	
	columns: [
	{
            dataField: "first_name",
			caption:'First Name',
			editorOptions: { maxLength: 15 },
			setCellValue:function(rowData, value){
				rowData.first_name=characters(value);
			},
            validationRules: [{ type: "required" }]
        },{
            dataField: "middle_name",
			caption:'M.I',
			editorOptions: { maxLength: 2 },
			setCellValue:function(rowData, value){
				
				rowData.middle_name=characters(value);
			},
          //  validationRules: [{ type: "required" }]
        }, {
            dataField: "last_name",
			caption:'Last Name',
			editorOptions: { maxLength: 15 },
			setCellValue:function(rowData, value){
				
				rowData.last_name=characters(value);
			},
            validationRules: [{ type: "required" }]
        },{
            dataField: "suffix",
			lookup: {
                dataSource: suffix,
                displayExpr: "lookup_value",
                valueExpr: "lookup_id"
            },
         //   validationRules: [{ type: "required" }],
		//	 message: "Required."
        },{
            dataField: "ssn",
			caption:'SSN',
			editorOptions: { maxLength: 9 },
			validationRules: [
			// { type: "required" }, 
			{
                type: "pattern",
                message: 'SSN should be 9 digits',
                pattern: /^\d{9}$/i 
            }]
         //   validationRules: [{ type: "required" }]
        },{
            dataField: "address1",
			editorOptions: { maxLength: 30 },
         //   validationRules: [{ type: "required" }]
        },{
            dataField: "apt_suite",
			caption:'Appt Suite#',
			editorOptions: { maxLength: 30 },
         //   validationRules: [{ type: "required" }]
        }, {
            dataField: "city",
			editorOptions: { maxLength: 20 },
			setCellValue:function(rowData, value){
				var r = value.replace(new RegExp("[0-9]", "g"), "");
				rowData.city=characters(r.replace(/[^\w]/gi, ''));
			},
         //   validationRules: [{ type: "required" }]
        }, {
            dataField: "state",
		
			editorOptions: {
            maxLength: 2
			
        },
         //   validationRules: [{ type: "required" }]
		 
			setCellValue:function(rowData, value){
				
				rowData.state=characters(value);
			},
			
		 
        },{
            dataField: "zip",
			caption:'ZIP',
		//	editorOptions: { maxlength: 5 },
			//dataType: 'number',
			validationRules: [
			// { type: "required" }, 
			{
                type: "pattern",
                message: 'ZIP should be 5 digits',
                pattern: /^\d{5}$/i 
            }]
         //   validationRules: [{ type: "required" }]
        },{
            dataField: "dob",
			caption:'DOB',
			dataType: 'date',
		//	format: 'shortDate',
      //      validationRules: [{ type: "required" }]
        },{
            dataField: "notes"
         //   validationRules: [{ type: "required" }]
        }
    ],  masterDetail: {
        enabled: true,
		highlightTitle: false,
        template: function(container, options) { 
            var currentEmployeeData = options.data;
            container.addClass("internal-grid-container");
            jq("<div>").text("Employment Period").appendTo(container);            
            jq("<div>")
                .addClass("internal-grid")
                .dxDataGrid({
					editing : {
				 allowUpdating: true,
				allowDeleting: true,
				allowAdding: true,
				mode :"batch",
				},
			//	onRowPrepared: function (rowElement, rowInfo) {
				//	alert('hi');
				/*	if(typeof rowElement.data != 'undefined'){
					if(typeof rowElement.data.hire_date != 'undefined' ){
						if(typeof rowElement.data.termination_date != 'undefined'){
							
						if(rowElement.data.termination_date-rowElement.data.hire_date<=0){
							rowElement.data.termination_date=null;
							toastr.error('Termination date cannot be less than Hire date');
						}
						
					}
						
					}
					} */
					//console.log(rowInfo);
           // if (rowInfo.data.year > 1800 && rowInfo.data.year <= 1900)
             //   rowElement.addClass("nineteenthCentury");
    //    },
			/*	onInitNewRow: function (e) {
					//console.log(e);
    e.data.hire_date = currentDate();
},
	onRowUpdating: function (info) {
			updateEmploymentPeriod(info);
			 },
	onRowInserting: function (info) {
		 addEmploymentPeriod(currentEmployeeData,info,encoded_company_id);
    },
	onRowInserted: function (newRow) {},
	onRowRemoving: function (info) {
        deleteEmploymentPeriod(info);
    },*/
                    columnAutoWidth: true,
                    columns: [ {
                        dataField: "hire_date",
                        dataType: "date",
					
						validationRules: [{ type: "required" }]
						//message: "Required."
                    }, {
                        dataField: "termination_date",
                        dataType: "date",
					 setCellValue:function(rowData, value){
			//	console.log(rowData);
				rowData.termination_date=value;
			}, 
						// validationRules: [{ type: "required" }]
						//message: "Required."
                    },{
                        dataField: "plan_class",
						caption:'Medical Plan Class Name',
						lookup: {
                dataSource: planclasses,
                displayExpr: "plan_class_name",
                valueExpr: "plan_class_id"
            },
                     // validationRules: [{ type: "required" }]
					//	message: "Required." 
					// dataType: "date"
                    },{
                        dataField: "status",
						caption:'FT/PT Status',
						lookup: {
                dataSource: Ftstatus,
                displayExpr: "Name",
                valueExpr: "ID"
            },
			// validationRules: [{ type: "required" }],
						message: "Required."
                       // dataType: "date"
                    },{
                        dataField: "waiting_period",
						caption:'Don"t Apply Waiting Period',
						//validationRules: [{ type: "required" }],
					//	message: "Required.",
                        dataType: "boolean"
                    }],
                    dataSource: currentEmployeeData.employmentperiods
                }).appendTo(container);
        }
    }
			}).dxDataGrid("instance");
	}