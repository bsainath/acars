<style>
.skin-blue .sidebar-menu>li:hover>a, .skin-blue .sidebar-menu>li.active>a
{
	border-left-color: #1E282C !important;
}
</style>

<aside class="main-sidebar">

    <section class="sidebar">

    <div class="user-panel" style="    min-height: 59px;">
					<div class="pull-left image"></div>
					<div class="pull-left info"></div>
				</div>
        <!-- Sidebar user panel -->
       <!-- <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>-->

        <!-- search form -->
      <!--  <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>-->
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                 
        		
               /*    ['label' => 'Global Dashboard',
        		       'icon' => 'fa fa-tachometer', 
        		        'url' => ['/client/dashboard'],
        		
			        		         ],
        		
        		
		        		['label' => 'Company Dashboard',
		        		'icon' => 'fa fa-line-chart',
		        		'url' => ['/client/dashboard/company'],
		        		
		        	             	],  */
		        		
        		['label' => 'Company Users',
        		'options' => ['id'=>'company_users'],
        		'icon' => 'fa fa-users',
        		'url' => ['/client/companyuser'],
        		
        		],
		        		['label' => 'Basic Reporting Info',
		        		'icon' => 'fa fa-file-o',
        				'options' => ['id'=>'basic_reporting'],
		        		'url' => ['/client/dashboard/reporting/'],
		        		'items' => [
		        		['label' => 'Basic Information',  'options' => ['class'=>'basic_info_menu','id'=>'basic_info_menu_1'],'icon' => 'fa fa-angle-double-right', 'url' => ['/client/dashboard/reporting#basicinformation'],],
						['label' => 'Large Emp. Status & Tracking', 'options' => ['class'=>'basic_info_menu','id'=>'basic_info_menu_2'], 'icon' => 'fa fa-angle-double-right', 'url' => ['/client/dashboard/reporting#empstatustracking'],],
        		['label' => 'Plan Offering Criteria', 'options' => ['class'=>'basic_info_menu','id'=>'basic_info_menu_3'], 'icon' => 'fa fa-angle-double-right', 'url' => ['/client/dashboard/reporting#planofferingcriteria'],],
        		['label' => 'Designated Government Entity', 'options' => ['class'=>'basic_info_menu','id'=>'basic_info_menu_4'], 'icon' => 'fa fa-angle-double-right', 'url' => ['/client/dashboard/reporting#designatedgovtentity'],],
        		['label' => 'Aggregated Group', 'options' => ['class'=>'basic_info_menu','id'=>'basic_info_menu_5'], 'icon' => 'fa fa-angle-double-right', 'url' => ['/client/dashboard/reporting#aggregatedgroup'],],
        		['label' => 'Anything Else to Tell Us','options' => ['class'=>'basic_info_menu','id'=>'basic_info_menu_6'], 'icon' => 'fa fa-angle-double-right', 'url' => ['/client/dashboard/reporting#anythingelse'],],
		        	
				        				],
			        		],
							['label' => 'Benefit Plan Info',
        		 'options' => ['class'=>'benefit_plan_info_main','id'=>'benefit_plan_info_menu_main'],
        		       'icon' => 'fa fa-keyboard-o', 
        		        'url' => ['/client/dashboard/plan'],
        		 'items' => [
        		['label' => 'General Plan Information', 'options' => ['class'=>'benefit_plan_info','id'=>'benefit_plan_info_menu_1'], 'icon' => 'fa fa-angle-double-right', 'url' => ['/client/dashboard/plan#generalplaninformation'],],
        		['label' => 'MEC Coverage', 'options' => ['class'=>'benefit_plan_info','id'=>'benefit_plan_info_menu_2'], 'icon' => 'fa fa-angle-double-right', 'url' => ['/client/dashboard/plan#meccoverage'],],
        		['label' => 'Plan Classes','options' => ['class'=>'','id'=>'benefit_plan_info_menu_3'], 'icon' => 'fa fa-angle-double-right', 'url' => ['/client/dashboard/planclass'],],
        		
        		 
        		],
			        		         ],
							
        		['label' => 'Payroll Data',
        		'options' => ['id'=>'payroll_data'],
        		'icon' => 'fa fa-money',
        		'url' => ['/client/payroll'],
        		 
        		],
        		
        		['label' => 'Medical Plan Enrollment Data',
        		'options' => ['id'=>'medical_plan_enrollment_data'],
        		'icon' => 'fa fa-ambulance',
        		'url' => ['/client/medical'],
        		 
        		],
        		
        		['label' => 'Create ACA Reporting Forms',
        		'options' => ['id'=>'aca_reporting_forms'],
        		'icon' => 'fa fa-wpforms',
        		'url' => ['/client/dashboard/create'],
        		 
        		],

        		['label' => 'Manage ACA Reporting Forms',
        		'options' => ['id'=>'manage_aca_reporting_forms'],
        		'icon' => 'fa fa-floppy-o',
        		'url' => ['/client/dashboard/manage'],
        		 
        		],
        		
        		['label' => 'E-File Forms',
        		'options' => ['id'=>'e_file_forms'],
        		'icon' => 'fa fa-file-text-o',
        		'url' => ['/client/dashboard/efile'],
        		 
        		],
        		
		        		//['label' => 'Facilities',
		        		//'icon' => 'fa fa-file-code-o',
		        		//'url' => ['/gii'],
		        		//'items' => [
		        		//['label' => 'Facilities ', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
		        		//['label' => 'New Facilities', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
					   //     		],
			        	//	],
		        		
        		
		        		//['label' => 'Members',
		        		//'icon' => 'fa fa-file-code-o',
		        		//'url' => ['/gii'],
		        		//'items' => [
		        		//['label' => 'All Members ', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
		        		//['label' => 'Account Members', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
						//['label' => 'Faculty Members', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
									      //		],
							       	//	],
		        		
        		
		        	//	['label' => 'Merchandise',
		        	//	'icon' => 'fa fa-file-code-o',
		        	//	'url' => ['/gii'],
		        	//	'items' => [
		        	//	['label' => 'Orders ', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
		        	//                         ],
				      //  	              	],
        		
        		
		        	//	['label' => 'Products',
		        	//	'icon' => 'fa fa-file-code-o',
		        	//	'url' => ['/gii'],
		        	//	'items' => [
		        	//	['label' => 'Plans ', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
		        	//	['label' => 'Plans Addons', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
						       // 		],
				        	//	],
        		
		        		
                 
                  //  [
                       // 'label' => 'User Directory',
                    //    'icon' => 'fa fa-share',
                   //     'url' => '#',
                     //   'items' => [
					//			[
							//	        'label' => 'Access Control',
							//	        'icon' => 'fa fa-circle-o',
							  //      	'url' => '#',
							   //      	'items' => [
							//							['label' => 'Api-Keys', 'icon' => 'fa fa-circle-o', 'url' => '#',],
													//	['label' => 'Groups', 'icon' => 'fa fa-circle-o', 'url' => '#',],
													//	['label' => 'Users', 'icon' => 'fa fa-circle-o', 'url' => '#',],
							                                 //	],
						 	                        //	],
			                        //    ['label' => 'People', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
			                        //    ['label' => 'Teams', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                       // ],
                  //  ],



					
					//[       'label' => 'Systems',
						//	'icon' => 'fa fa-file-code-o',
						//	'url' => ['/gii'],
						//	'items' => [
					//['label' => 'Regions ', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
				//	['label' => 'Locations', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
				//	['label' => 'System Logs', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
						//		],
					//	],
                
				
				
				
				
				],
            ]
        ) ?>

    </section>

</aside>
