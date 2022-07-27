<!-- Quick Settings Panel -->
<div class="quick-settings-panel">
    <div id="quicksettingCloseIcon"><i class='lni lni-close'></i></div>

    <div id="quickSettingPanel">
        <div class="quick-setting-tab">
            <!-- Nav Tabs -->
            <ul class="nav nav-tabs" id="quickSettingTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="todo-list-tab" data-toggle="tab" href="#to-do-list" role="tab"
                        aria-controls="to-do-list" aria-selected="true">Todo List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab"
                        aria-controls="settings" aria-selected="false">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="notifications-tab" data-toggle="tab" href="#notifications" role="tab"
                        aria-controls="notifications" aria-selected="false">Notifications</a>
                </li>
            </ul>

            <!-- Tabs Content -->
            <div class="tab-content" id="quickSettingTabContent">
                <div class="tab-pane fade show active" id="to-do-list" role="tabpanel"
                    aria-labelledby="todo-list-tab">
                    <div class="widgets-todo-list-area">
                        <!-- Item Add Form -->
                        <form id="form-add-todo" class="form-add-todo">
                            <input type="text" id="new-todo-item" class="new-todo-item" name="todo"
                                placeholder="Add New">
                            <input type="submit" id="add-todo-item" class="add-todo-item" value="Add">
                        </form>

                        <!-- Item Show Form -->
                        <form id="form-todo-list">
                            <ul id="ecapsToDo-list" class="todo-list">
                                <li>
                                    <label class="ckbox">
                                        <input type="checkbox" name="todo-item-done" class="todo-item-done"
                                            value="test">
                                        <span></span>
                                    </label> Go to Market
                                    <i class="todo-item-delete lni lni-trash"></i>
                                </li>
                                <li>
                                    <label class="ckbox">
                                        <input type="checkbox" name="todo-item-done" class="todo-item-done"
                                            value="hello">
                                        <span></span>
                                    </label> Meeting with AD
                                    <i class="todo-item-delete lni lni-trash"></i>
                                </li>
                                <li>
                                    <label class="ckbox">
                                        <input type="checkbox" name="todo-item-done" class="todo-item-done"
                                            value="hello">
                                        <span></span>
                                    </label> Check Mail
                                    <i class="todo-item-delete lni lni-trash"></i>
                                </li>
                                <li>
                                    <label class="ckbox">
                                        <input type="checkbox" name="todo-item-done" class="todo-item-done"
                                            value="hello">
                                        <span></span>
                                    </label> Work for Theme
                                    <i class="todo-item-delete lni lni-trash"></i>
                                </li>
                                <li>
                                    <label class="ckbox">
                                        <input type="checkbox" name="todo-item-done" class="todo-item-done"
                                            value="hello">
                                        <span></span>
                                    </label> Buy Some Vegetables
                                    <i class="todo-item-delete lni lni-trash"></i>
                                </li>
                                <li>
                                    <label class="ckbox">
                                        <input type="checkbox" name="todo-item-done" class="todo-item-done"
                                            value="hello">
                                        <span></span>
                                    </label> Call CEO
                                    <i class="todo-item-delete lni lni-trash"></i>
                                </li>
                                <li>
                                    <label class="ckbox">
                                        <input type="checkbox" name="todo-item-done" class="todo-item-done"
                                            value="hello">
                                        <span></span>
                                    </label> Create a Plugin
                                    <i class="todo-item-delete lni lni-trash"></i>
                                </li>
                                <li>
                                    <label class="ckbox">
                                        <input type="checkbox" name="todo-item-done" class="todo-item-done"
                                            value="hello">
                                        <span></span>
                                    </label> Fixed Template Issues <i class="todo-item-delete lni lni-trash"></i>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                    <div class="quick-setting-option">
                        <h6 class="mb-4">Quick Settings</h6>

                        <!-- Single Setting -->
                        <div class="toggle-group mb-4">
                            <input type="checkbox" name="on-off-switch" id="on-off-switch2" tabindex="1">
                            <label for="on-off-switch2">Get Feedbacks</label>
                            <div class="onoffswitch" aria-hidden="true">
                                <div class="onoffswitch-label">
                                    <div class="onoffswitch-inner"></div>
                                    <div class="onoffswitch-switch"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Setting -->
                        <div class="toggle-group mb-4">
                            <input type="checkbox" name="on-off-switch" id="on-off-switch3" checked="" tabindex="1">
                            <label for="on-off-switch3">Notifications</label>
                            <div class="onoffswitch" aria-hidden="true">
                                <div class="onoffswitch-label">
                                    <div class="onoffswitch-inner"></div>
                                    <div class="onoffswitch-switch"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Setting -->
                        <div class="toggle-group mb-4">
                            <input type="checkbox" name="on-off-switch" id="on-off-switch4" tabindex="1">
                            <label for="on-off-switch4">Todo Lists</label>
                            <div class="onoffswitch" aria-hidden="true">
                                <div class="onoffswitch-label">
                                    <div class="onoffswitch-inner"></div>
                                    <div class="onoffswitch-switch"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Setting -->
                        <div class="toggle-group mb-4">
                            <input type="checkbox" name="on-off-switch" id="on-off-switch5" tabindex="1">
                            <label for="on-off-switch5">Top Header</label>
                            <div class="onoffswitch" aria-hidden="true">
                                <div class="onoffswitch-label">
                                    <div class="onoffswitch-inner"></div>
                                    <div class="onoffswitch-switch"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Setting -->
                        <div class="toggle-group mb-4">
                            <input type="checkbox" name="on-off-switch" id="on-off-switch6" checked="" tabindex="1">
                            <label for="on-off-switch6">Sidebar</label>
                            <div class="onoffswitch" aria-hidden="true">
                                <div class="onoffswitch-label">
                                    <div class="onoffswitch-inner"></div>
                                    <div class="onoffswitch-switch"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="color-setting-option mt-5">
                        <h6 class="mb-4">Color Options</h6>

                        <!-- Single Setting -->
                        <div class="toggle-group mb-4">
                            <input type="checkbox" name="on-off-switch" id="on-off-switch8" tabindex="1">
                            <label for="on-off-switch8">Light Sidebar</label>
                            <div class="onoffswitch" aria-hidden="true">
                                <div class="onoffswitch-label">
                                    <div class="onoffswitch-inner"></div>
                                    <div class="onoffswitch-switch"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Setting -->
                        <div class="toggle-group mb-4">
                            <input type="checkbox" name="on-off-switch" id="on-off-switch9" tabindex="1">
                            <label for="on-off-switch9">Dark Topbar</label>
                            <div class="onoffswitch" aria-hidden="true">
                                <div class="onoffswitch-label">
                                    <div class="onoffswitch-inner"></div>
                                    <div class="onoffswitch-switch"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Setting -->
                        <div class="toggle-group mb-4">
                            <input type="checkbox" name="on-off-switch" id="on-off-switch10" checked=""
                                tabindex="1">
                            <label for="on-off-switch10">Footer Color</label>
                            <div class="onoffswitch" aria-hidden="true">
                                <div class="onoffswitch-label">
                                    <div class="onoffswitch-inner"></div>
                                    <div class="onoffswitch-switch"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Setting -->
                        <div class="toggle-group mb-4">
                            <input type="checkbox" name="on-off-switch" id="on-off-switch11" tabindex="1">
                            <label for="on-off-switch11">Header Dark</label>
                            <div class="onoffswitch" aria-hidden="true">
                                <div class="onoffswitch-label">
                                    <div class="onoffswitch-inner"></div>
                                    <div class="onoffswitch-switch"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Setting -->
                        <div class="toggle-group mb-4">
                            <input type="checkbox" name="on-off-switch" id="on-off-switch12" checked=""
                                tabindex="1">
                            <label for="on-off-switch12">Prelaoder Color</label>
                            <div class="onoffswitch" aria-hidden="true">
                                <div class="onoffswitch-label">
                                    <div class="onoffswitch-inner"></div>
                                    <div class="onoffswitch-switch"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
                    <!-- Notifications Box -->
                    <div class="notifications-box">
                        <a href="#" class="nav-link px-2"><i class="lni lni-heart bg-success"></i><span>We've got
                                something for you!</span></a>
                        <a href="#" class="nav-link px-2"><i class="lni lni-alarm bg-danger"></i><span>Domain names
                                expiring on Tuesday</span></a>
                        <a href="#" class="nav-link px-2"><i class="lni lni-checkmark"></i><span>Your commissions
                                has been sent</span></a>
                        <a href="#" class="nav-link px-2"><i class="lni lni-heart bg-success"></i><span>You sold an
                                item!</span></a>
                        <a href="#" class="nav-link px-2"><i class="lni lni-alarm bg-warning"></i><span>Security
                                alert for your linked Google account</span></a>
                        <a href="#" class="nav-link px-2"><i class="lni lni-heart bg-success"></i><span>We've got
                                something for you!</span></a>
                        <a href="#" class="nav-link px-2"><i class="lni lni-alarm bg-danger"></i><span>Domain names
                                expiring on Tuesday</span></a>
                        <a href="#" class="nav-link px-2"><i class="lni lni-checkmark"></i><span>Your commissions
                                has been sent</span></a>
                        <a href="#" class="nav-link px-2"><i class="lni lni-heart bg-success"></i><span>You sold an
                                item!</span></a>
                        <a href="#" class="nav-link px-2"><i class="lni lni-alarm bg-warning"></i><span>Security
                                alert for your linked Google account</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>