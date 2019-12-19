<template>
<div>
    <!-- Breadcrumbs -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Permissions</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="#" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Main Body -->
    <div class="m-content">
        <!--Begin::Section-->
        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet m-portlet--mobile ">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Role to Permissions Assignments
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <table-permissions :roles="roles"/>
                    </div>
                </div>
            </div>
        </div>
        <!--End::Section-->
    </div>
</div>
</template>

<script>
export default {
    props: ['roles']
}
</script>
