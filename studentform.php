<!-- نضال عبدالرحمن بي  
   		 رقم القيد 216185139	
              المهمة الثانية  	-->

<!--begin::Portlet-->
								<div class="m-portlet">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
												<h3 class="m-portlet__head-text">
													إضافة مستخدم جديد
												</h3>
											</div>
										</div>
									</div>
									<!--begin::Form-->
									<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" method="post" action="adduser.php">
										<div class="m-portlet__body">
											<div class="form-group m-form__group row">
												<div class="col-md-3">
													<label>
														الاسم الاول
													</label>
													<input type="text" name="firstname" class="form-control m-input" placeholder="أدخل الأسم الأول">
													<span class="m-form__help">
																
 													</span>
												</div>
												<div class="col-md-3">
													<label>
														الاسم الثاني
													</label>
													<input type="text" name="secondname" class="form-control m-input" placeholder="أدخل الإسم الثاني">
													<span class="m-form__help">
																
 													</span>
												</div>
												<div class="col-md-3">
													<label>
														الاسم الثالث
													</label>
													<input type="text" name="thirdname" class="form-control m-input" placeholder="أدخل الإسم الثالث">
													<span class="m-form__help">
																
 													</span>
												</div>
												<div class="col-md-3">
													<label>
														اللقب
													</label>
													<input type="text" name="lastname" class="form-control m-input" placeholder="أدخل اللقب">
													<span class="m-form__help">
																
 													</span>
												</div>
												
												
											<div class="form-group m-form__group row">
												<div class="col-lg-8">
													<label>
														الجنس
													</label>
													<div class="m-radio-inline">
														<label class="m-radio m-radio--solid">
															<input type="radio" name="gender" checked value="1">
																ذكر
															<span></span>
														</label>
														<label class="m-radio m-radio--solid">
															<input type="radio" name="gender" value="2">
															 أنثي
															<span></span>
														</label>

														
														


													</div>
													
												</div>
											</div>
												
												
												
												
                                                  <div class="col-lg-4">
													<label class="">
													        رقم الهاتف  
													</label>
													<input type="text" name="phone" class="form-control m-input" placeholder="أدخل رقم الهاتف">
													<span class="m-form__help">
														
													</span>
												</div>
											 
												<div class="col-lg-4">
													<label class="">
													  البريد الإلكتروني 
													</label>
													<input type="email" name="email" class="form-control m-input" placeholder="أدخل البريد الإلكتروني">
													<span class="m-form__help">
														
													</span>
												</div>
												
												<div class="col-lg-4">
													<label class="">
													  تاريخ الميلاد 
													</label>
													<input type="date" name="birthday" class="form-control m-input" placeholder="أدخل تاريخ الميلاد">
													<span class="m-form__help">
														
													</span>
												</div>
												
												<div class="col-lg-4">
													<label class="">
													  الرقم الوطني
													</label>
													<input type="text" name="nationalno" class="form-control m-input" placeholder="أدخل الرقم الوطني">
													<span class="m-form__help">
														
													</span>
												</div>
												
												
												<div class="col-lg-4">
													<label class="">
													  الجنسية  
													</label>
													<input type="text" name="nationality" class="form-control m-input" placeholder="أدخل الجنسية">
													<span class="m-form__help">
														
													</span>
												</div>
												
												<div class="col-lg-4">
													<label class="">
													  اسم المستخدم 
													</label>
													<input type="text" name="username" class="form-control m-input" placeholder="أدحل اسم المستخدم">
													<span class="m-form__help">
														
													</span>
												</div>
												
												<div class="col-lg-4">
													<label class="">
													  كلمة السر
													</label>
													<input type="password" name="password" class="form-control m-input" placeholder="أدخل كلمة سر">
													<span class="m-form__help">
														
													</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
														العنوان
													</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="text" name="address" class="form-control m-input" placeholder="ادخل العنوان">
														<span class="m-input-icon__icon m-input-icon__icon--right">
															<span>
																<i class="la la-map-marker"></i>
															</span>
														</span>
													</div>
													<span class="m-form__help">
														
													</span>
												</div>
												
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
														نوع المستخدم
													</label>
													<div class="m-radio-inline">
														<label class="m-radio m-radio--solid">
															<input type="radio" name="usertype" checked value="1">
																طالب
															<span></span>
														</label>
														<label class="m-radio m-radio--solid">
															<input type="radio" name="usertype" value="2">
															 استاذ
															<span></span>
														</label>

														<label class="m-radio m-radio--solid">
															<input type="radio" name="usertype" value="3">
															 موظف
															<span></span>
														</label>
														<label class="m-radio m-radio--solid">
															<input type="radio" name="usertype" value="4">
															 ولي امر
															<span></span>
														</label>


													</div>
													<span class="m-form__help">
														أختر نوع المستخدم
													</span>
												</div>
											</div>
										</div>
										<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
											<div class="m-form__actions m-form__actions--solid">
												<div class="row">
													<div class="col-lg-6">
														<button type="submit" name="submit"  class="btn btn-primary">
															حفظ
														</button>
														<button type="reset" class="btn btn-secondary">
															إلغاء
														</button>
													</div>
												</div>
											</div>
										</div>
									</form>
									<!--end::Form-->
								</div>
								<!--end::Portlet-->
