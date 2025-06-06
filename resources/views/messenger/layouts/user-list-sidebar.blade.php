<div class="wsus__user_list">
    <div class="wsus__user_list_header">
        <h3>
            <span><img src="images/chat_list_icon.png" alt="Chat" class="img-fluid"></span>
            MESSAGES
        </h3>
        <span class="setting" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-user-cog"></i>
        </span>

       @include('messenger.layouts.profile-modal')
    </div>

    <form action="#" class="wsus__user_list_search">
        <input class="input" type="text" placeholder="Search">
        <div class="user_search_result">
            <div class="wsus__user_list_area_height">
                <div class="wsus__user_list_item">
                    <div class="img">
                        <img src="images/author_img_1.jpg" alt="User" class="img-fluid">
                        <span class="active"></span>
                    </div>
                    <div class="text">
                        <h5>Jubaydul islam</h5>
                        <p><span>You</span> Hi, What"s your name</p>
                    </div>
                    <span class="time">10m ago</span>
                </div>
            </div>
        </div>
    </form>

    <div class="wsus__favourite_user">
        <div class="top">favourites</div>
        <div class="row favourite_user_slider">
            <div class="col-xl-3">
                <a href="#" class="wsus__favourite_item">
                    <div class="img">
                        <img src="images/author_img_1.jpg" alt="User" class="img-fluid">
                        <span class="inactive"></span>
                    </div>
                    <p>mr hasin</p>
                </a>
            </div>
        </div>
    </div>

    <div class="wsus__save_message">
        <div class="top">your space</div>
        <div class="wsus__save_message_center">
            <div class="icon">
                <i class="far fa-bookmark"></i>
            </div>
            <div class="text">
                <h3>Saved Messages</h3>
                <p>Save messages secretly</p>
            </div>
            <span>you</span>
        </div>
    </div>

    <div class="wsus__user_list_area">
        <div class="top">All Messages</div>
        <div class="wsus__user_list_area_height">
            <div class="wsus__user_list_item">
                <div class="img">
                    <img src="images/author_img_1.jpg" alt="User" class="img-fluid">
                    <span class="active"></span>
                </div>
                <div class="text">
                    <h5>Jubaydul islam</h5>
                    <p><span>You</span> Hi, What"s your name</p>
                </div>
                <span class="time">10m ago</span>
            </div>
        </div>

        <!-- <div class="wsus__user_list_liading">
            <div class="spinner-border text-light" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div> -->

    </div>
</div>
