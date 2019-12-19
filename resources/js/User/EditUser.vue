<template>
<div>
    <!-- Breadcrumbs -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Users</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="#" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a h:ref="route('web.users.index') }}" class="m-nav__link">
                            <span class="m-nav__link-text">Users</span>
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

                <!--begin::Portlet-->
                <div class="m-portlet m-portlet--last m-portlet--full-height m-portlet--responsive-mobile" id="main_portlet">
                    <form class="m-form m-form--label-align-left- m-form--state-" id="publisher-form" @submit.prevent="submit">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-progress">
                                <!-- here can place a progress bar-->
                            </div>
                            <div class="m-portlet__head-wrapper">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <span class="m-portlet__head-icon">
                                            <i class="flaticon-suitcase"></i>
                                        </span>
                                        <h3 class="m-portlet__head-text">
                                            Edit User
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <a :href="route('web.user.index')" class="btn btn-secondary m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
                                        <span>
                                            <i class="la la-arrow-left"></i>
                                            <span>Back</span>
                                        </span>
                                    </a>
                                    <div class="btn-group">
                                        <button type="submit" class="btn btn-primary  m-btn m-btn--icon m-btn--wide m-btn--md">
                                            <span>
                                                <i class="la la-check"></i>
                                                <span>Save</span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn btn-primary  dropdown-toggle dropdown-toggle-split m-btn m-btn--md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" onclick="
                                                event.preventDefault(); document.getElementById('publisher-form').submit();
                                            "><i class="la la-plus"></i> Save & New</a>
                                            <a class="dropdown-item" href="#"><i class="la la-undo"></i> Save & Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="la la-close"></i> Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <div class="m-portlet__body">
                                <div class="row">
                                    <div class="col-xl-8 offset-xl-2">
                                        <div class="m-form__section m-form__section--first">
                                            <div class="m-form__heading">
                                                <h3 class="m-form__heading-title">User Details</h3>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label class="col-form-label col-lg-3 col-sm-12" for="first_name">First Name</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <input class="form-control m-input--solid" type="text" v-model="form.first_name">
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label class="col-form-label col-lg-3 col-sm-12" for="last_name">Last Name</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <input class="form-control m-input--solid" type="text" v-model="form.last_name">
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label class="col-form-label col-lg-3 col-sm-12" for="title">Password</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <input class="form-control m-input--solid" type="password" v-model="form.password">
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label class="col-form-label col-lg-3 col-sm-12" for="email">Email Address</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <input class="form-control m-input--solid" type="email" v-model="form.email">
                                                </div>
                                            </div>
                                            <div class="form-group m-form__group row">
                                                <label class="col-form-label col-lg-3 col-sm-12" for="role">Roles</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="dropdown bootstrap-select show-tick form-control m-bootstrap-select">
                                                        <select class="form-control m-bootstrap-select m_selectpicker selectpicker m-bootstrap-select--solid" v-model="form.role">
                                                            <option v-for="role in roles" :value="role.id" :key="role.id">
                                                                {{ role.name | kebabTitle }}
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--End::Section-->
    </div>
</div>
</template>

<script>
import { Errors } from 'form-backend-validation';

export default {
    props: ['user', 'roles'],

    data() {
        return {
            errors: [],
            form: {
                first_name: this.user.first_name,
                last_name: this.user.last_name,
                password: this.user.password,
                email: this.user.email,
                role: this.user.roles[0].id,
            }
        }
    },

    filters: {
        kebabTitle: function (str) {
            if (!str) return '';
            return str.split('-').map(function (item) {
                return item.charAt(0).toUpperCase() + item.substring(1);
            }).join(' ');
        }
    },

    methods: {
        submit() {
            loader.lock()
            axios
                .patch(route('web.user.patch', [this.user.id]), this.form)
                .then((response) => {
                    toastr.success("Saved", response.data.message, {"positionClass": "toast-top-center", "showMethod": "slideDown"})
                    loader.unlock()
                })
                .catch(({response}) => this.setErrors(response));
        },

        setErrors(response) {
            this.errors = response.data.errors;
        },
    }
}
</script>
