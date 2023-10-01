    <aside class="pew1">

        <div class="toolbar">
            <div class="toolbar-namelibrary">

                <img src="https://library-management.com/uploads/satellite.png" />

                <div>
                    <span class="shadows">Lib Mng</span>
                </div>

            </div>

            <div class="toolbar__profile">
                <div class="toolbar__profile-box">
                    <div class="toolbar__profile-box-img">
                        <img src="https://library-management.com/uploads/default.png" />
                    </div>

                    <div class="shadows">
                        <p>Admin</p><br>

                    </div>
                </div>
            </div>

            <div class="toolbar__catagory">
                <ul class="toolbar__catagory-list">
                    <li class="toolbar__catagory-item" id="page_dashboard">
                        <a href="{{ route('admin.data.index') }}" class="toolbar__catagory-link">
                            <img src="https://img.icons8.com/color-glass/60/000000/dashboard.png" />
                            <p class="shadows">Thống kê</p>
                        </a>
                    </li>
                    <li class="toolbar__catagory-item" id="page_managebook">
                        <a class="toolbar__catagory-link" id="icon_managebook">
                            <img src="https://img.icons8.com/fluent/60/000000/book.png" />
                            <p class="shadows">Quản lí tủ sách</p>
                            <img class="toolbar__catagory-link-img2"
                                src="https://img.icons8.com/ios-glyphs/16/000000/chevron-left.png" />
                        </a>
                        <ul class="toolbar__catagory-item-list">
                            <li id="page_listbook">
                                <a href="{{ route('admin.book.index') }}">
                                    <img src="https://img.icons8.com/material-sharp/24/4a90e2/check-all.png" />
                                    <p class="shadows">Tủ sách</p>
                                </a>
                            </li>
                            <li id="page_addbook">

                                <a href="{{ route('admin.book.create') }}">
                                    <img src="https://img.icons8.com/material-sharp/24/4a90e2/check-all.png" />
                                    <p class="shadows">Thêm sách</p>
                                </a>
                            </li>
                            <li id="page_editbook">
                                <a>
                                    <img src="https://img.icons8.com/material-sharp/24/4a90e2/check-all.png" />
                                    <p class="shadows">Sửa sách</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="toolbar__catagory-item" id="page_manageuser">
                        <a href="{{ route('admin.user.index') }}" class="toolbar__catagory-link">
                            <img src="https://img.icons8.com/color/60/000000/user.png" />
                            <p class="shadows">Quản lý người mượn</p>
                        </a>
                    </li>
                    <li class="toolbar__catagory-item" id="page_managecontact">
                        <a href="{{ route('admin.contact.index') }}" class="toolbar__catagory-link">
                            <img src="https://img.icons8.com/fluent/48/000000/new-contact.png" />
                            <p class="shadows">Quản lý liên hệ</p>
                        </a>
                    </li>
                    <li class="toolbar__catagory-item" id="page_manageorder">
                        <a href="{{ route('admin.order.index') }}" class="toolbar__catagory-link">
                            <img src="https://img.icons8.com/fluent/48/000000/purchase-order.png" />
                            <p class="shadows">Quản lý đơn mượn</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </aside>
