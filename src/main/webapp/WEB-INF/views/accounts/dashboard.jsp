<%@ page language="java" contentType="text/html; charset=utf-8" pageEncoding="utf-8"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@ taglib prefix="spring" uri="http://www.springframework.org/tags" %>
<spring:eval expression="@propertyConfigurer.getProperty('cdn.url')" var="cdnUrl" />
<!DOCTYPE html>
<html lang="${language}">
<head>
    <meta charset="UTF-8">
    <title><spring:message code="testzilla.accounts.dashboard.dashboard" text="Dashboard" /> | TestZilla</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="谢浩哲">
    <!-- Icon -->
    <link href="<c:url value="/assets/img/favicon.ico" />" rel="shortcut icon">
    <!-- StyleSheets -->
    <link rel="stylesheet" type="text/css" href="${cdnUrl}/css/semantic.min.css" />
    <link rel="stylesheet" type="text/css" href="${cdnUrl}/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="${cdnUrl}/css/style.css" />
    <link rel="stylesheet" type="text/css" href="${cdnUrl}/css/accounts/dashboard.css" />
    <!-- JavaScript -->
    <script type="text/javascript" src="${cdnUrl}/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="${cdnUrl}/js/semantic.min.js"></script>
</head>
<body>
    <!-- Header -->
    <%@ include file="/WEB-INF/views/include/header.jsp" %>
    <!-- Content -->
    <div id="content">
        <div id="sub-header" class="ui page stackable grid segment">
            <div class="row">
                <div class="column">
                    <h1><i class="fa fa-dashboard"></i> <spring:message code="testzilla.accounts.dashboard.dashboard" text="Dashboard" /></h1>
                    <div class="ui breadcrumb">
                        <a href="<c:url value="/" />" class="section"><spring:message code="testzilla.accounts.dashboard.home" text="Home" /></a>
                        <div class="divider"> / </div>
                        <div class="active section"><spring:message code="testzilla.accounts.dashboard.dashboard" text="Dashboard" /></div>
                    </div> <!-- .breadcrumb -->
                </div> <!-- .column -->
            </div> <!-- .row -->
        <c:choose>
        <c:when test="${user.userGroup.userGroupSlug == 'developer'}">
            <div class="five item tabular ui menu">
        </c:when>
        <c:otherwise>
            <div class="two item tabular ui menu">
        </c:otherwise>
        </c:choose>
                <a class="item active" data-tab="overview"><spring:message code="testzilla.accounts.dashboard.overview" text="Overview" /></a>
                <a class="item" data-tab="issues"><spring:message code="testzilla.accounts.dashboard.issues" text="Issues" /></a>
            <c:if test="${user.userGroup.userGroupSlug == 'developer'}">
                <a class="item" data-tab="products"><spring:message code="testzilla.accounts.dashboard.products" text="Products" /></a>
                <a class="item" data-tab="contests"><spring:message code="testzilla.accounts.dashboard.contests" text="Contests" /></a>
                <a class="item" data-tab="questionnaires"><spring:message code="testzilla.accounts.dashboard.questionnaires" text="Questionnaires" /></a>
            </c:if>
            </div> <!-- .tabular -->
        </div> <!-- #sub-header -->
        <div id="main-container" class="ui page stackable grid">
            <div id="overview-tab" class="ui tab active" data-tab="overview">
                <div class="ui stackable grid">
                    <div class="row">
                        <div class="four wide column">
                            <div class="ui card">
                                <div class="image dimmable">
                                    <img src="${cdnUrl}/img/default-avatar.jpg">
                                </div> <!-- .image -->
                                <div class="content">
                                    <div class="header">${user.username}</div>
                                    <div class="meta">
                                        <a class="group">${user.realName}</a>
                                    </div> <!-- .meta -->
                                    <div class="description">
                                        <div class="ui list">
                                            <div class="item"><i class="icon mail"></i> ${user.email}</div> <!-- .item -->
                                            <div class="item"><i class="icon marker"></i> ${user.province}, ${user.country}</div> <!-- .item -->
                                        </div> <!-- .list -->
                                    </div>
                                </div> <!-- .content -->
                                <div class="extra content">
                                    <a id="edit-profile-trigger" class="right floated created" href="javascript:void(0);"><spring:message code="testzilla.accounts.dashboard.edit-profile" text="Edit Profile" /></a>
                                </div> <!-- .extra -->
                            </div> <!-- .card -->
                        </div> <!-- .four -->
                        <div class="twelve wide column">
                            <div class="ui stackable grid">
                                <div class="two column row">
                                    <div class="column">
                                        <div class="ui statistic">
                                            <div class="value"><i class="trophy icon"></i> ${reputation}</div>
                                            <div class="label"><spring:message code="testzilla.accounts.dashboard.reputation" text="Reputation" /></div>
                                        </div> <!-- .statistic -->
                                    </div> <!-- .column -->
                                    <div class="column">
                                        <div class="ui statistic">
                                            <div class="value"><i class="ticket icon"></i> ${credits}</div>
                                            <div class="label"><spring:message code="testzilla.accounts.dashboard.credits" text="Credits" /></div>
                                        </div> <!-- .statistic -->
                                    </div> <!-- .column -->
                                </div> <!-- .row -->
                                <div class="ui divider"></div> <!-- .divider -->
                                <div class="row">
                                    <div class="column">
                                        <h4 class="ui header"><i class="icon feed"></i> <spring:message code="testzilla.accounts.dashboard.feed" text="Feed" /></h4>
                                        <p><spring:message code="testzilla.accounts.dashboard.no-feed" text="No feed." /></p>
                                        <div class="ui feed"></div> <!-- .feed -->
                                    </div> <!-- .column -->
                                </div> <!-- .row -->
                            </div> <!-- .grid -->
                        </div> <!-- .twelve -->
                    </div> <!-- .row -->
                </div> <!-- .grid -->
            </div> <!-- #overview-tab -->
            <div id="issues-tab" class="ui tab" data-tab="issues">
                <div class="ui stackable grid">
                    <div class="row">
                        <div id="issues-sidebar" class="four wide column">
                            <div class="ui vertical fluid menu">
                            <c:if test="${user.userGroup.userGroupSlug == 'developer'}">
                                <a class="item"><spring:message code="testzilla.accounts.dashboard.received-issues" text="Received Issues" /></a>
                            </c:if>
                                <a class="item active"><spring:message code="testzilla.accounts.dashboard.sent-issues" text="Sent Issues" /></a>
                                <div class="item">
                                    <div class="ui transparent icon input">
                                        <input type="text" placeholder="<spring:message code="testzilla.accounts.dashboard.placeholder.search" text="Search" />...">
                                        <i class="search icon"></i>
                                    </div> <!-- .input -->
                                </div> <!-- .item -->
                            </div> <!-- .menu -->
                        </div> <!-- .four -->
                        <div class="twelve wide column">
                            <div id="issues">
                                <div class="ui info message">
                                    <p><spring:message code="testzilla.accounts.dashboard.no-issues" text="There aren't any issues." /></p>
                                </div> <!-- .message -->
                                <div class="ui relaxed divided items"></div> <!-- .items -->
                                <div class="pagination-container">
                                    <div class="ui pagination menu"></div> <!-- .pagination -->
                                </div> <!-- .pagination-container -->
                            </div> <!-- #issues -->
                        </div> <!-- .twelve -->
                    </div> <!-- .row -->
                </div> <!-- .grid -->
            </div> <!-- #issues-tab -->
        <c:if test="${user.userGroup.userGroupSlug == 'developer'}">
            <div id="products-tab" class="ui tab" data-tab="products">
                <div class="ui stackable grid">
                    <div class="row">
                        <div id="products-sidebar" class="four wide column">
                            <div class="ui vertical fluid menu">
                                <a class="item active"><spring:message code="testzilla.accounts.dashboard.my-products" text="My Products" /></a>
                                <a class="item"><spring:message code="testzilla.accounts.dashboard.new-product" text="New Product" /></a>
                                <div class="item">
                                    <div class="ui transparent icon input">
                                        <input type="text" placeholder="<spring:message code="testzilla.accounts.dashboard.placeholder.search" text="Search" />...">
                                        <i class="search icon"></i>
                                    </div> <!-- .input -->
                                </div> <!-- .item -->
                            </div> <!-- .menu -->
                        </div> <!-- .four -->
                        <div class="twelve wide column">
                            <div id="products">
                                <div class="ui relaxed divided items"></div> <!-- .items -->
                                <div class="pagination-container">
                                    <div class="ui pagination menu"></div> <!-- .pagination -->
                                </div> <!-- .pagination-container -->
                                <div class="ui info message hide">
                                    <p><spring:message code="testzilla.accounts.dashboard.no-product-found" text="No products found." /></p>
                                </div> <!-- .message -->
                            </div> <!-- #products -->
                            <div id="product" class="hide">
                                <div class="ui info message">
                                    <div class="header"><spring:message code="testzilla.accounts.dashboard.note" text="Note:" /></div>
                                    <p><spring:message code="testzilla.accounts.dashboard.create-product-cost" text="Create a product will cost you 75 credits." /></p>
                                </div> <!-- .info -->
                                <div class="ui form">
                                    <div class="two required fields">
                                        <div class="field">
                                            <label for="product-name"><spring:message code="testzilla.accounts.dashboard.product-name" text="Product Name" /></label>
                                            <input id="product-id" type="hidden" maxlength="20" />
                                            <input id="product-name" type="text" maxlength="32" />
                                        </div> <!-- .field -->
                                        <div class="field">
                                            <label for="product-logo"><spring:message code="testzilla.accounts.dashboard.product-logo-url" text="Product Logo URL" /></label>
                                            <input id="product-logo" type="text" placeholder="<spring:message code="testzilla.accounts.dashboard.placeholder.example" text="Example: " />http://www.testzilla.org/logo.png" />
                                        </div> <!-- .field -->
                                    </div> <!-- .fields -->
                                    <div class="two required fields">
                                        <div class="field">
                                            <label for="product-category"><spring:message code="testzilla.accounts.dashboard.product-category" text="Product Category" /></label>
                                            <div class="ui selection dropdown" tabindex="0">
                                                <div class="default text"></div>
                                                <i class="dropdown icon"></i>
                                                <input id="product-category" type="hidden">
                                                <div class="menu transition hidden" tabindex="-1">
                                                <c:forEach var="productCategory" items="${productCategories}">
                                                    <div class="item" data-value="${productCategory.productCategorySlug}">${productCategory.productCategoryName}</div>
                                                </c:forEach>
                                                </div> <!-- .menu -->
                                            </div> <!-- .selection -->
                                        </div> <!-- .field -->
                                        <div class="field">
                                            <label for="latest-version"><spring:message code="testzilla.accounts.dashboard.latest-version" text="Latest Version" /></label>
                                            <input id="latest-version" type="text" maxlength="24" />
                                        </div> <!-- .field -->
                                    </div> <!-- .fields -->
                                    <div class="two required fields">
                                        <div class="field">
                                            <label for="prerequisites"><spring:message code="testzilla.accounts.dashboard.prerequisites" text="Prerequisites" /></label>
                                            <input id="prerequisites" type="text" maxlength="128" placeholder="<spring:message code="testzilla.accounts.dashboard.placeholder.example" text="Example: " />IE 7.0+, Java 1.7.0+ or iOS 7.0+" />
                                        </div> <!-- .field -->
                                        <div class="field">
                                            <label for="product-url"><spring:message code="testzilla.accounts.dashboard.product-url" text="Product URL" /></label>
                                            <input id="product-url" type="text" maxlength="256" placeholder="<spring:message code="testzilla.accounts.dashboard.placeholder.example" text="Example: " />http://www.testzilla.org/" />
                                        </div> <!-- .field -->
                                    </div> <!-- .fields -->
                                    <div class="required field">
                                        <label for="description"><spring:message code="testzilla.accounts.dashboard.description" text="Description" /></label>
                                        <textarea id="description" placeholder="<spring:message code="testzilla.accounts.dashboard.placeholder.text-format-hint" text="Plain text only. HTML and Markdown is not supported." />"></textarea>
                                    </div> <!-- .field -->
                                    <div class="actions">
                                        <button class="ui positive button" type="submit"><spring:message code="testzilla.accounts.dashboard.create-product" text="Create Product" /></button>
                                        <button class="ui negative button"><spring:message code="testzilla.accounts.dashboard.cancel" text="Cancel" /></button>
                                    </div> <!-- .fields -->
                                </div> <!-- .form -->
                            </div> <!-- #new-product -->
                        </div> <!-- .twelve -->
                    </div> <!-- .row -->
                </div> <!-- .grid -->
            </div> <!-- #products-tab -->
            <div id="contests-tab" class="ui tab" data-tab="contests">
                <div class="ui stackable grid">
                    <div class="row">
                        <div class="four wide column">
                            <div class="ui vertical fluid menu">
                                <a class="item active"><spring:message code="testzilla.accounts.dashboard.my-contests" text="My Contests" /></a>
                                <a class="item"><spring:message code="testzilla.accounts.dashboard.new-contests" text="New Contests" /></a>
                                <div class="item">
                                    <div class="ui transparent icon input">
                                        <input type="text" placeholder="<spring:message code="testzilla.accounts.dashboard.placeholder.search" text="Search" />...">
                                        <i class="search icon"></i>
                                    </div> <!-- .input -->
                                </div> <!-- .item -->
                            </div> <!-- .menu -->
                        </div> <!-- .four -->
                        <div class="twelve wide column">
                            <div class="ui info message"><spring:message code="testzilla.accounts.dashboard.no-contests" text="There aren't any contests." /></div>
                        </div> <!-- .twelve -->
                    </div> <!-- .row -->
                </div> <!-- .grid -->
            </div> <!-- #contests-tab -->
            <div id="questionnaires-tab" class="ui tab" data-tab="questionnaires">
                <div class="ui stackable grid">
                    <div class="row">
                        <div class="four wide column">
                        	<div class="ui vertical fluid menu">
                                <a class="item active"><spring:message code="testzilla.accounts.dashboard.my-questionnaires" text="My Questionnaires" /></a>
                                <a class="item"><spring:message code="testzilla.accounts.dashboard.new-questionnaire" text="New Questionnaire" /></a>
                                <div class="item">
                                    <div class="ui transparent icon input">
                                        <input type="text" placeholder="<spring:message code="testzilla.accounts.dashboard.placeholder.search" text="Search" />...">
                                        <i class="search icon"></i>
                                    </div> <!-- .input -->
                                </div> <!-- .item -->
                            </div> <!-- .menu -->
                        </div> <!-- .four -->
                        <div class="twelve wide column">
                        	<div class="ui info message"><spring:message code="testzilla.accounts.dashboard.no-questionnaires" text="There aren't any questionnaires." /></div>
                        </div> <!-- .twelve -->
                    </div> <!-- .row -->
                </div> <!-- .grid -->
            </div> <!-- #questionnaires-tab -->
        </c:if>
        </div> <!-- #main-container -->
    </div> <!-- #content -->
    <!-- Footer -->
    <%@ include file="/WEB-INF/views/include/footer.jsp" %>
    <!-- Modals -->
    <div class="ui dimmer modals page transition hidden">
        <div id="profile-modal" class="ui long test modal transition scrolling hidden">
            <i class="close icon"></i>
            <div class="header">
                <h3><spring:message code="testzilla.accounts.dashboard.edit-profile" text="Edit Profile" /></h3>
            </div> <!-- .header -->
            <div class="content">
                <div id="profile-error" class="ui error message hide"></div> <!-- #profile-error -->
                <div class="ui form">
                    <div class="two required fields">
                        <div class="field">
                        <c:choose>
                        <c:when test="${user.isIndividual()}">
                            <label for="real-name"><spring:message code="testzilla.accounts.dashboard.real-name" text="Real Name" /></label>
                        </c:when>
                        <c:otherwise>
                            <label for="real-name"><spring:message code="testzilla.accounts.dashboard.company-name" text="Company Name" /></label>
                        </c:otherwise>
                        </c:choose>
                            <input id="real-name" type="text" value="${user.realName}" />
                        </div> <!-- .field -->
                        <div class="field">
                            <label for="email"><spring:message code="testzilla.accounts.dashboard.email" text="Email" /></label>
                            <input id="email" type="text" value="${user.email}" />
                        </div> <!-- .field -->
                    </div> <!-- .fields -->
                    <div class="two fields">
                        <div class="field required">
                            <label for="country"><spring:message code="testzilla.accounts.dashboard.country" text="Country" /></label>
                            <div class="ui selection dropdown" tabindex="0">
                                <div class="text">${user.country}</div>
                                <i class="dropdown icon"></i>
                                <input id="country" type="hidden" value="${user.country}">
                                <div class="menu transition hidden" tabindex="-1">
                                </div> <!-- .menu -->
                            </div> <!-- .selection -->
                        </div> <!-- .field -->
                        <div class="field required">
                            <label for="province"><spring:message code="testzilla.accounts.dashboard.state-province" text="State(Province)" /></label>
                            <input id="province" type="text" value="${user.province}" maxlength="24" />
                        </div> <!-- .field -->
                    </div> <!-- .fields -->
                    <div class="two fields">
                        <div class="field">
                            <label for="city"><spring:message code="testzilla.accounts.dashboard.city" text="City" /></label>
                            <input id="city" type="text" value="${user.city}" maxlength="24" />
                        </div> <!-- .field -->
                        <div class="field"></div> <!-- .field -->
                    </div> <!-- .fields -->
                    <div class="two fields">
                        <div class="required field">
                            <label for="phone"><spring:message code="testzilla.accounts.dashboard.phone" text="Phone" /></label>
                            <input id="phone" type="text" value="${user.phone}" maxlength="24" />
                        </div> <!-- .field -->
                        <div class="field">
                            <label for="website"><spring:message code="testzilla.accounts.dashboard.website" text="Website" /></label>
                            <input id="website" type="text" value="${user.website}" maxlength="64" />
                        </div> <!-- .field -->
                    </div> <!-- .fields -->
                    <div class="two fields">
                        <div class="field">
                            <label for="old-password"><spring:message code="testzilla.accounts.dashboard.old-password" text="Old Password" /></label>
                            <input id="old-password" type="password" maxlength="16" />
                        </div> <!-- .field -->
                        <div class="field"></div> <!-- .field -->
                    </div> <!-- .fields -->
                    <div class="two fields">
                        <div class="field">
                            <label for="new-password"><spring:message code="testzilla.accounts.dashboard.new-password" text="New Password" /></label>
                            <input id="new-password" type="password" maxlength="16" />
                        </div> <!-- .field -->
                        <div class="field">
                            <label for="confirm-password"><spring:message code="testzilla.accounts.dashboard.confirm-password" text="Confirm Password" /></label>
                            <input id="confirm-password" type="password" maxlength="16" />
                        </div> <!-- .field -->
                    </div> <!-- .fields -->
                </div> <!-- .form -->
            </div> <!-- .content -->
            <div class="actions">
                <button class="ui positive button" type="submit"><spring:message code="testzilla.accounts.dashboard.save" text="Save" /></button>
                <button class="ui negative button"><spring:message code="testzilla.accounts.dashboard.cancel" text="Cancel" /></button>
            </div> <!-- .actions -->
        </div> <!-- #profile-modal -->
        <div id="issue-modal" class="ui long test modal transition scrolling hidden">
            <i class="close icon"></i>
            <div class="header">
                <h3><spring:message code="testzilla.accounts.dashboard.view-issue" text="View Issue" /></h3>
            </div> <!-- .header -->
            <div class="content">
                <div id="issue-error" class="ui error message hide"></div> <!-- #issue-error -->
                <div class="ui form">
                    <div class="two fields">
                        <div class="field">
                            <label for="title"><spring:message code="testzilla.accounts.dashboard.title" text="Title" /></label>
                            <input id="title" type="text" disabled="disabled"/>
                            <input id="bug-id" type="hidden"/>
                        </div> <!-- .field -->
                        <div class="field">
                            <label for="product-name"><spring:message code="testzilla.accounts.dashboard.product-name" text="Product Name" /></label>
                            <input id="product-name" type="text" disabled="disabled"/>
                        </div> <!-- .field -->
                    </div> <!-- .fields -->
                    <div class="two fields">
                        <div class="field">
                            <label for="product-version"><spring:message code="testzilla.accounts.dashboard.product-version" text="Product Version" /></label>
                            <input id="product-version" type="text" disabled="disabled"/>
                        </div> <!-- .field -->
                        <div class="required field">
                            <label><spring:message code="testzilla.accounts.dashboard.status" text="Status" /></label>
                            <div class="ui selection dropdown" tabindex="0">
                                <div class="default text"><spring:message code="testzilla.accounts.dashboard.please-choose" text="Please choose..." /></div>
                                <i class="dropdown icon"></i>
                                <input id="bug-status" type="hidden">
                                <div class="menu transition hidden" tabindex="-1">
                                <c:forEach var="bugStatus" items="${bugStatusList}">
                                    <div class="item" data-value="${bugStatus.bugStatusSlug}">${bugStatus.bugStatusName}</div>
                                </c:forEach>
                                </div> <!-- .menu -->
                            </div> <!-- .selection -->
                        </div> <!-- .field -->
                    </div> <!-- .fields -->
                    <div class="two required fields">
                        <div class="field">
                            <label><spring:message code="testzilla.accounts.dashboard.category" text="Category" /></label>
                            <div class="ui selection dropdown" tabindex="0">
                                <div class="default text"><spring:message code="testzilla.accounts.dashboard.please-choose" text="Please choose..." /></div>
                                <i class="dropdown icon"></i>
                                <input id="bug-category" type="hidden">
                                <div class="menu transition hidden" tabindex="-1">
                                <c:forEach var="bugCategory" items="${bugCategories}">
                                    <div class="item" data-value="${bugCategory.bugCategorySlug}">${bugCategory.bugCategoryName}</div>
                                </c:forEach>
                                </div> <!-- .menu -->
                            </div> <!-- .selection -->
                        </div> <!-- .field -->
                        <div class="field">
                            <label><spring:message code="testzilla.accounts.dashboard.severity" text="Severity" /></label>
                            <div class="ui selection dropdown" tabindex="0">
                                <div class="default text"><spring:message code="testzilla.accounts.dashboard.please-choose" text="Please choose..." /></div>
                                <i class="dropdown icon"></i>
                                <input id="bug-severity" type="hidden">
                                <div class="menu transition hidden" tabindex="-1">
                                <c:forEach var="bugSeverity" items="${bugSeverityList}">
                                    <div class="item" data-value="${bugSeverity.bugSeveritySlug}">${bugSeverity.bugSeverityName}</div>
                                </c:forEach>
                                </div> <!-- .menu -->
                            </div> <!-- .selection -->
                        </div> <!-- .field -->
                    </div> <!-- .fields -->
                    <div class="field">
                        <label for="description"><spring:message code="testzilla.accounts.dashboard.description" text="Description" /></label>
                        <div id="description"></div> <!-- #description -->
                    </div> <!-- .field -->
                </div> <!-- .form -->
            </div> <!-- .content -->
            <div class="actions">
                <button class="ui positive button" type="submit"><spring:message code="testzilla.accounts.dashboard.save" text="Save" /></button>
                <button class="ui negative button"><spring:message code="testzilla.accounts.dashboard.cancel" text="Cancel" /></button>
            </div> <!-- .actions -->
        </div> <!-- #issue-modal -->
    </div> <!-- .dimmer -->
    <!-- Java Script -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="${cdnUrl}/js/site.js"></script>
    <script type="text/javascript" src="${cdnUrl}/js/country.js"></script>
    <script type="text/javascript" src="${cdnUrl}/js/moment.min.js"></script>
    <script type="text/javascript" src="${cdnUrl}/js/markdown.editor.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('.tabular.menu .item', '#content').tab();
            $('.ui.dropdown', '#content').dropdown();
        });
    </script>
    <script type="text/javascript">
        $(function() {
            converter = Markdown.getSanitizingConverter();
            converter.hooks.chain("preBlockGamut", function (text, rbg) {
                return text.replace(/^ {0,3}""" *\\n((?:.*?\\n)+?) {0,3}""" *$/gm, function (whole, inner) {
                    return "<blockquote>" + rbg(inner) + "</blockquote>\\n";
                });
            });

            /*editor    = new Markdown.Editor(converter);
            editor.run();*/
        });
    </script>
    <script type="text/javascript">
        function displayPagination(currentPage, totalPages, paginationContainer) {
            var lowerBound = ( currentPage - 5 > 0 ? currentPage - 5 : 1 ),
                upperBound = ( currentPage + 5 < totalPages ? currentPage + 5 : totalPages );
            var paginationString  = '<a class="icon item' + ( currentPage > 1 ? '' : ' disabled' ) + '"><i class="left arrow icon"></i></a>';

            for ( var i = lowerBound; i <= upperBound; ++ i ) {
                paginationString += '<a class="item' + ( currentPage == i ? ' active' : '' ) + '">' + i + '</a>';
            }
            paginationString     += '<a class="icon item' + ( currentPage < totalPages ? '' : ' disabled' )+ '"><i class="right arrow icon"></i></a>';
            $('.pagination', paginationContainer).html(paginationString);
        }
    </script>
    <!-- Java Script for Overview Tab -->
    <script type="text/javascript">
        $('#edit-profile-trigger').click(function() {
            $('#profile-error').addClass('hide');

            $('#profile-modal').modal({
                closable  : false,
                onDeny    : function(){
                    // Clear all fields
                    $('input[type=password]', '#profile-modal').val('');
                },
                onApprove : function() {
                    editProfile();
                    return false;
                }
            }).modal('show');
        });
    </script>
    <script type="text/javascript">
        function editProfile() {
            var realName        = $('#real-name').val(),
                email           = $('#email').val(),
                country         = $('#country').val(),
                province        = $('#province').val(),
                city            = $('#city').val(),
                phone           = $('#phone').val(),
                website         = $('#website').val(),
                oldPassword     = $('#old-password').val(),
                newPassword     = $('#new-password').val(),
                confirmPassword = $('#confirm-password').val();

            return editProfileAction(realName, email, country, province, city, phone, 
                                     website, oldPassword, newPassword, confirmPassword);
        }
    </script>
    <script type="text/javascript">
        function editProfileAction(realName, email, country, province, city, phone, 
                                   website, oldPassword, newPassword, confirmPassword) {
            $('#profile-error').addClass('hide');
            $('button.positive', '#profile-modal').html('Saving...');
            $('button.positive', '#profile-modal').attr('disabled', 'disabled');
            $('div.form', '#profile-modal').addClass('loading');
            
            var postData = {
                'realName': realName,
                'email': email,
                'country': country,
                'province': province,
                'city': city,
                'phone': phone,
                'website': website,
                'oldPassword': oldPassword,
                'newPassword': newPassword,
                'confirmPassword': confirmPassword,
            };
            $.ajax({
                type: 'POST',
                url: '<c:url value="/accounts/editProfile.action" />',
                data: postData,
                dataType: 'JSON',
                success: function(result) {
                    $('div.form', '#profile-modal').removeClass('loading');
                    $('button.positive', '#profile-modal').html('Save');
                    $('button.positive', '#profile-modal').removeAttr('disabled');

                    processEditProfileResult(result);
                }
            });
        }
    </script>
    <script type="text/javascript">
        function processEditProfileResult(result) {
            if ( result['isSuccessful'] ) {
                $('#profile-modal').modal('hide');
            } else {
                var errorMessage  = '';

                if ( result['isRealNameEmpty'] ) {
                    errorMessage += '<spring:message code="testzilla.accounts.dashboard.error.name-empty" text="You can&apos;t leave <strong>Your Name/Company Name</strong> empty." /><br>';
                } else if ( !result['isRealNameLegal'] ) {
                    errorMessage += '<spring:message code="testzilla.accounts.dashboard.error.name-too-long" text="The length of <strong>Your Name/Company Name</strong> must not exceed 32 characters." /><br>';
                }
                if ( result['isEmailEmpty'] ) {
                    errorMessage += '<spring:message code="testzilla.accounts.dashboard.error.email-empty" text="You can&apos;t leave <strong>Email</strong> empty." /><br>';
                } else if ( !result['isEmailLegal'] ) {
                    errorMessage += '<spring:message code="testzilla.accounts.dashboard.error.email-invalid" text="The <strong>Email</strong> seems invalid." /><br>';
                } else if ( result['isEmailExists'] ) {
                    errorMessage += '<spring:message code="testzilla.accounts.dashboard.error.email-already-exists" text="Someone already use that email." /><br>';
                }
                if ( result['isCountryEmpty'] ) {
                    errorMessage += '<spring:message code="testzilla.accounts.dashboard.error.country-empty" text="You can&apos;t leave <strong>Country</strong> empty." /><br>';
                } else if ( !result['isCountryLegal'] ) {
                    errorMessage += '<spring:message code="testzilla.accounts.dashboard.error.country-too-long" text="The length of <strong>Country</strong> must not exceed 24 characters." /><br>';
                }
                if ( result['isProvinceEmpty'] ) {
                    errorMessage += '<spring:message code="testzilla.accounts.dashboard.error.state-empty" text="You can&apos;t leave <strong>State(Province)</strong> empty." /><br>';
                } else if ( !result['isProvinceLegal'] ) {
                    errorMessage += '<spring:message code="testzilla.accounts.dashboard.error.state-too-long" text="The length of <strong>State(Province)</strong> must not exceed 24 characters." /><br>';
                }
                if ( !result['isCityLegal'] ) {
                    errorMessage += '<spring:message code="testzilla.accounts.dashboard.error.city-too-long" text="The length of <strong>City</strong> must not exceed 24 characters." /><br>';
                }
                if ( result['isPhoneEmpty'] ) {
                    errorMessage += '<spring:message code="testzilla.accounts.dashboard.error.phone-empty" text="You can&apos;t leave <strong>Phone</strong> empty." /><br>';
                } else if ( !result['isPhoneLegal'] ) {
                    errorMessage += '<spring:message code="testzilla.accounts.dashboard.error.phone-invalid" text="The <strong>Phone</strong> seems invalid." /><br>';
                }
                if ( !result['isWebsiteLegal'] ) {
                    errorMessage += '<spring:message code="testzilla.accounts.dashboard.error.website-invalid" text="The <strong>Website</strong> seems invalid." /><br>';
                }
                if ( !result['isOldPasswordCorrect'] ) {
                    errorMessage += '<spring:message code="testzilla.accounts.dashboard.error.old-password-wrong" text="The <strong>Old Password</strong> seems not correct." /><br>';
                } 
                if ( !result['isNewPasswordLegal'] ) {
                    errorMessage += '<spring:message code="testzilla.accounts.dashboard.error.new-password-illegal-length" text="The length of <strong>New Password</strong> must between 6 and 16 characters." /><br>';
                } 
                if ( !result['isPasswordMatched'] ) {
                    errorMessage += '<spring:message code="testzilla.accounts.dashboard.error.new-password-unmatch" text="The new passwords don&apos;t match." /><br>';
                }

                $('#profile-error').html(errorMessage);
                $('#profile-error').removeClass('hide');
            }
        }
    </script>
    <!-- Java Script for Issues Tab -->
    <script type="text/javascript">
        $('.menu .item', '#issues-sidebar').click(function() {
            $('.menu .item', '#issues-sidebar').removeClass('active');
            $(this).addClass('active');

            var pageNumber = 1;
            return getIssues(pageNumber);
        });
    </script>
    <script type="text/javascript">
        $('.pagination', '#issues').delegate('a.item', 'click', function(e) {
            e.preventDefault();
            if ( $(this).hasClass('disabled') ) {
                return;
            }
            var currentPage = parseInt($('a.active', '.pagination').html(), 10);
                pageNumber  = $(this).html();
            
            $('.pagination > a.active').removeClass('active');
            $(this).addClass('active');

            if ( pageNumber.indexOf('left arrow') != -1 ) {
                pageNumber  = currentPage - 1;
            } else if ( pageNumber.indexOf('right arrow') != -1 ) {
                pageNumber  = currentPage + 1;
            }
            return getIssues(pageNumber);
        });
    </script>
    <script type="text/javascript">
        $(function() {
            var pageNumber = 1;
            return getIssues(pageNumber);
        });
    </script>
    <script type="text/javascript">
        function getIssues(pageNumber) {
            var selectedItem = $('.menu .item.active', '#issues-sidebar');

            if ( $(selectedItem).html() == 'Sent Issues' ) {
                return getSentIssues(pageNumber);
            } else {
                return getReceivedIssues(pageNumber);
            }
        }
    </script>
    <script type="text/javascript">
        function getSentIssues(pageNumber) {
            var pageRequests = {
                'page': pageNumber
            };

            $.ajax({
                type: 'GET',
                url: '<c:url value="/accounts/getSentIssues.action" />',
                data: pageRequests,
                dataType: 'JSON',
                success: function(result) {
                    if ( result['isSuccessful'] ) {
                        $('.items', '#issues').removeClass('hide');
                        $('.pagination-container', '#issues').removeClass('hide');
                        $('.info', '#issues').addClass('hide');

                        displaySentBugs(result['bugs']);
                        displayPagination(pageNumber, result['totalPages'], $('#issues'));
                    } else {
                        $('.items', '#issues').addClass('hide');
                        $('.pagination-container', '#issues').addClass('hide');
                        $('.info', '#issues').removeClass('hide');
                    }
                }
            });
        }
    </script>
    <script type="text/javascript">
        function displaySentBugs(bugs) {
            $('.items', '#issues').empty();

            for ( var i = 0; i < bugs.length; ++ i ) {
                $('.items', '#issues').append(getSentBugContent(bugs[i]['title'], bugs[i]['product'], 
                                                                bugs[i]['productVersion'], bugs[i]['description'], 
                                                                bugs[i]['bugCategory'], bugs[i]['bugStatus'], bugs[i]['createTime']));
            }
        }
    </script>
    <script type="text/javascript">
        function getSentBugContent(bugTitle, product, productVersion, description, bugCategory, bugStatus, createTime) {
            var bugContentTemplate = '<div class="item">' + 
                                     '    <div class="content">' + 
                                     '        <a class="header">%s</a>' + 
                                     '        <div class="meta"><ahref="<c:url value="/products/" />%s">%s (%s)</a></div> <!-- .meta -->' + 
                                     '        <div class="description">%s</div> <!-- .description -->' + 
                                     '        <div class="extra">' + 
                                     '            <div class="ui label">%s</div> <!-- .label -->' + 
                                     '            <div class="ui label">%s</div> <!-- .label -->' + 
                                     '            <div class="ui label">Created on %s</div> <!-- .label -->' + 
                                     '        </div> <!-- .extra -->' + 
                                     '    </div> <!-- .content -->' + 
                                     '</div> <!-- .item -->';
            return bugContentTemplate.format(bugTitle, product['productId'], product['productName'], productVersion,
                                             stripHtml(converter.makeHtml(description.replace(/\\\n/g, '\\n'))), 
                                             bugCategory['bugCategoryName'], bugStatus['bugStatusName'], getTimeElapsed(createTime));
        }
    </script>
    <script type="text/javascript">
        function getReceivedIssues(pageNumber) {
            var pageRequests = {
                'page': pageNumber
            };

            $.ajax({
                type: 'GET',
                url: '<c:url value="/accounts/getReceivedIssues.action" />',
                data: pageRequests,
                dataType: 'JSON',
                success: function(result) {
                    if ( result['isSuccessful'] ) {
                        $('.items', '#issues').removeClass('hide');
                        $('.pagination-container', '#issues').removeClass('hide');
                        $('.info', '#issues').addClass('hide');

                        displayReceivedBugs(result['bugs']);
                        displayPagination(pageNumber, result['totalPages'], $('#issues'));
                    } else {
                        $('.items', '#issues').addClass('hide');
                        $('.pagination-container', '#issues').addClass('hide');
                        $('.info', '#issues').removeClass('hide');
                    }
                }
            });
        }
    </script>
    <script type="text/javascript">
        function displayReceivedBugs(bugs) {
            $('.items', '#issues').empty();

            for ( var i = 0; i < bugs.length; ++ i ) {
                $('.items', '#issues').append(getReceivedBugContent(bugs[i]['bugId'], bugs[i]['title'], bugs[i]['product'], 
                                                                bugs[i]['productVersion'], bugs[i]['description'], 
                                                                bugs[i]['bugCategory'], bugs[i]['bugSeverity'], 
                                                                bugs[i]['bugStatus'], bugs[i]['createTime']));
            }
        }
    </script>
    <script type="text/javascript">
        function getReceivedBugContent(bugId, bugTitle, product, productVersion, description, bugCategory, bugSeverity, bugStatus, createTime) {
            var bugContentTemplate = '<div class="item">' + 
                                     '    <div class="content">' + 
                                     '        <a class="header">%s</a>' + 
                                     '        <div class="meta"><ahref="<c:url value="/products/" />%s">%s (%s)</a></div> <!-- .meta -->' + 
                                     '        <a class="edit" href="javascript:viewBug(%s);"><spring:message code="testzilla.accounts.dashboard.view" text="View" />/<spring:message code="testzilla.accounts.dashboard.edit" text="Edit" /></a>' + 
                                     '        <div class="description">%s</div> <!-- .description -->' + 
                                     '        <div class="extra">' + 
                                     '            <div class="ui label">%s</div> <!-- .label -->' + 
                                     '            <div class="ui label">%s</div> <!-- .label -->' + 
                                     '            <div class="ui label">%s</div> <!-- .label -->' + 
                                     '            <div class="ui label">Created on %s</div> <!-- .label -->' + 
                                     '        </div> <!-- .extra -->' + 
                                     '    </div> <!-- .content -->' + 
                                     '</div> <!-- .item -->';
            return bugContentTemplate.format(bugTitle, product['productId'], product['productName'], productVersion,
                                             bugId, stripHtml(converter.makeHtml(description.replace(/\\\n/g, '\\n'))), 
                                             bugCategory['bugCategoryName'], bugSeverity['bugSeverityName'], 
                                             bugStatus['bugStatusName'], getTimeElapsed(createTime));
        }
    </script>
    <script type="text/javascript">
        function stripHtml(str) {
            return str.replace(/<(?:.|\s)*?>/g, " ");
        }
    </script>
    <script type="text/javascript">
        function getTimeElapsed(timeStamp) {
            var dateTime = moment.unix(timeStamp / 1000);
            return dateTime.fromNow();
        }
    </script>
    <script type="text/javascript">
        function viewBug(bugId) {
            $('#issue-error').addClass('hide');

            $('#issue-modal').modal({
                closable  : false,
                onApprove : function() {
                    editBug();
                    return false;
                }
            }).modal('show');

            $('.form', '#issue-modal').addClass('loading');
            return getBug(bugId);
        }
    </script>
    <script type="text/javascript">
        function getBug(bugId) {
            var pageRequests = {
                'bugId': bugId
            };

            $.ajax({
                type: 'GET',
                url: '<c:url value="/accounts/getBug.action" />',
                data: pageRequests,
                dataType: 'JSON',
                success: function(result) {
                    if ( result['isSuccessful'] ) {
                        $('#bug-id', '#issue-modal').val(result['bug']['bugId']);
                        $('#title', '#issue-modal').val(result['bug']['title']);
                        $('#product-name', '#issue-modal').val(result['bug']['product']['productName']);
                        $('#product-version', '#issue-modal').val(result['bug']['productVersion']);
                        $('#description', '#issue-modal').html(converter.makeHtml(result['bug']['description'].replace(/\\\n/g, '\\n')));

                        $('#bug-category', '#issue-modal').parent().find('.text').removeClass('default');
                        $('#bug-category', '#issue-modal').parent().find('.text').html(result['bug']['bugCategory']['bugCategoryName']);
                        $('#bug-category', '#issue-modal').val(result['bug']['bugCategory']['bugCategorySlug']);
                        $('#bug-severity', '#issue-modal').parent().find('.text').removeClass('default');
                        $('#bug-severity', '#issue-modal').parent().find('.text').html(result['bug']['bugSeverity']['bugSeverityName']);
                        $('#bug-severity', '#issue-modal').val(result['bug']['bugSeverity']['bugSeveritySlug']);
                        $('#bug-status', '#issue-modal').parent().find('.text').removeClass('default');
                        $('#bug-status', '#issue-modal').parent().find('.text').html(result['bug']['bugStatus']['bugStatusName']);
                        $('#bug-status', '#issue-modal').val(result['bug']['bugStatus']['bugStatusSlug']);

                        $('.form', '#issue-modal').removeClass('loading');
                    } else {
                        alert('<spring:message code="testzilla.accounts.dashboard.alert.issue-not-exists" text="Issue not exists.\\nPlease contact webmaster for help." />');
                    }
                }
            });
            
        }
    </script>
    <script type="text/javascript">
        function editBug() {
            var bugId       = $('#bug-id').val(),
                bugStatus   = $('#bug-status').val(),
                bugCategory = $('#bug-category').val(),
                bugSeverity = $('#bug-severity').val();

            return editBugAction(bugId, bugStatus, bugCategory, bugSeverity);
        }
    </script>
    <script type="text/javascript">
        function editBugAction(bugId, bugStatus, bugCategory, bugSeverity) {
            $('#issue-error').addClass('hide');
            $('button.positive', '#issue-modal').html('Saving...');
            $('button.positive', '#issue-modal').attr('disabled', 'disabled');
            $('div.form', '#issue-modal').addClass('loading');
            
            var postData = {
                'bugId': bugId,
                'bugStatus': bugStatus,
                'bugCategory': bugCategory,
                'bugSeverity': bugSeverity
            };
            $.ajax({
                type: 'POST',
                url: '<c:url value="/accounts/editBug.action" />',
                data: postData,
                dataType: 'JSON',
                success: function(result) {
                    $('div.form', '#issue-modal').removeClass('loading');
                    $('button.positive', '#issue-modal').html('Save');
                    $('button.positive', '#issue-modal').removeAttr('disabled');

                    processEditBugResult(result);
                }
            });
        }
    </script>
    <script type="text/javascript">
        function processEditBugResult(result) {
            if ( result['isSuccessful'] ) {
                var pageNumber = 1;
                $('#issue-modal').modal('hide');

                return getIssues(pageNumber);
            } else {
                var errorMessage  = '';

                if ( !result['isAllowedEdit'] ) {
                    errorMessage += '<spring:message code="testzilla.accounts.dashboard.error.issue-uneditable" text="You&apos;re not allowed to edit this issue." /><br>';
                }
                if ( result['isStatusEmpty'] ) {
                    errorMessage += '<spring:message code="testzilla.accounts.dashboard.error.bug-status-empty" text="Please choose your <strong>Bug Status</strong>." /><br>';
                }
                if ( result['isCategoryEmpty'] ) {
                    errorMessage += '<spring:message code="testzilla.accounts.dashboard.error.bug-category-empty" text="Please choose your <strong>Bug Category</strong>." /><br>';
                }
                if ( result['isSeverityEmpty'] ) {
                    errorMessage += '<spring:message code="testzilla.accounts.dashboard.error.bug-severity-empty" text="Please choose your <strong>Bug Severity</strong>." /><br>';
                }

                $('#issue-error').html(errorMessage);
                $('#issue-error').removeClass('hide');
            }
        }
    </script>
    <!-- Java Script for Products Tab -->
    <script type="text/javascript">
        $('.menu .item', '#products-sidebar').click(function() {
            $('.menu .item', '#products-sidebar').removeClass('active');
            $(this).addClass('active');

            if ( $(this).html() == 'My Products' ) {
                $('#product').addClass('hide');
                $('#products').removeClass('hide');
            } else {
                $('input, textarea', '#product').val('');
                $('button.positive', '#product').html('Create Product');

                // Switch to another tab
                $('#products').addClass('hide');
                $('#product').removeClass('hide');
            }
        });
    </script>
    <script type="text/javascript">
        $('.pagination', '#products').delegate('a.item', 'click', function(e) {
            e.preventDefault();
            if ( $(this).hasClass('disabled') ) {
                return;
            }
            var currentPage = parseInt($('a.active', '.pagination').html(), 10);
                pageNumber  = $(this).html();
            
            $('.pagination > a.active').removeClass('active');
            $(this).addClass('active');

            if ( pageNumber.indexOf('left arrow') != -1 ) {
                pageNumber  = currentPage - 1;
            } else if ( pageNumber.indexOf('right arrow') != -1 ) {
                pageNumber  = currentPage + 1;
            }
            return getProducts(pageNumber);
        });
    </script>
    <script type="text/javascript">
        $(function() {
            var pageNumber = 1;
            return getProducts(pageNumber);
        });
    </script>
    <script type="text/javascript">
        function getProducts(pageNumber) {
            var pageRequests = {
                'page': pageNumber
            };

            $.ajax({
                type: 'GET',
                url: '<c:url value="/accounts/getProducts.action" />',
                data: pageRequests,
                dataType: 'JSON',
                success: function(result) {
                    if ( result['isSuccessful'] ) {
                        $('.items', '#products').removeClass('hide');
                        $('.pagination', '#products').removeClass('hide');
                        $('.info', '#products').addClass('hide');

                        displayProducts(result['products']);
                        displayPagination(pageNumber, result['totalPages'], $('#products'));
                    } else {
                        $('.items', '#products').addClass('hide');
                        $('.pagination', '#products').addClass('hide');
                        $('.info', '#products').removeClass('hide');
                    }
                }
            });
        }
    </script>
    <script type="text/javascript">
        function displayProducts(products) {
            $('#products .items').empty();

            for ( var i = 0; i < products.length; ++ i ) {
                $('#products .items').append(getProductContent(products[i]['productId'], products[i]['productName'], 
                                                               products[i]['productLogo'], products[i]['productCategory'], 
                                                               products[i]['latestVersion'], products[i]['description'], products[i]['numberOfIssues']));
            }
        }
    </script>
    <script type="text/javascript">
        function getProductContent(productId, productName, productLogo, productCategory, latestVersion, description, numberOfTesters) {
            var productContentTemplate = '<div class="item">' + 
                                         '    <div class="ui small image">' + 
                                         '        <img src="%s" />' + 
                                         '    </div> <!-- .image -->' + 
                                         '    <div class="content">' + 
                                         '        <a class="header" href="<c:url value="/products/" />%s">%s</a>' + 
                                         '        <a class="edit" href="javascript:editProduct(%s);">Edit</a>' + 
                                         '        <div class="meta"><a>%s</a></div> <!-- .meta -->' + 
                                         '        <div class="description">%s</div> <!-- .description -->' + 
                                         '        <div class="extra">' + 
                                         '            <div class="ui label">%s</div> <!-- .label -->' + 
                                         '            <div class="ui label">%s issue(s) reported</div> <!-- .label -->' + 
                                         '        </div> <!-- .extra -->' + 
                                         '    </div> <!-- .content -->' + 
                                         '</div> <!-- .item -->';
            return productContentTemplate.format(productLogo, productId, productName, 
                                                 productId, productCategory['productCategoryName'], 
                                                 description, latestVersion, numberOfTesters);
        }
    </script>
    <script type="text/javascript">
        function editProduct(productId) {
            $('button.positive', '#product').html('Save');
            
            // Switch to another tab
            $('#products').addClass('hide');
            $('#product').removeClass('hide');

            // Loading data for the product
            $('.form', '#product').addClass('loading');
            return getProduct(productId);
        }
    </script>
    <script type="text/javascript">
        function getProduct(productId) {
            var postData = {
                'productId': productId
            };

            $.ajax({
                type: 'GET',
                url: '<c:url value="/products/getProduct.action" />',
                data: postData,
                dataType: 'JSON',
                success: function(result) {
                    if ( result['isSuccessful'] ) {
                        displayProduct(result['product']);
                    } else {
                        alert('<spring:message code="testzilla.accounts.dashboard.alert.product-not-exists" text="Product not exists.\\nPlease contact webmaster for help." />');
                    }

                    $('.form', '#product').removeClass('loading');
                }
            });
        }
    </script>
    <script type="text/javascript">
        function displayProduct(product) {
            $('#product-id').val(product['productId']);
            $('#product-name').val(product['productName']);
            $('#product-logo').val(product['productLogo']);
            $('#latest-version').val(product['latestVersion']);
            $('#prerequisites').val(product['prerequisites']);
            $('#product-url').val(product['url']);
            $('#description').val(product['description']);

            $('#product-category').parent().find('.text').removeClass('default');
            $('#product-category').parent().find('.text').html(product['productCategory']['productCategoryName']);
            $('#product-category').val(product['productCategory']['productCategorySlug']);
        }
    </script>
    <script type="text/javascript">
        $('button.positive', '#product div.form').click(function() {
            var productId       = $('#product-id').val(),
                productName     = $('#product-name').val(),
                productLogo     = $('#product-logo').val(),
                productCategory = $('#product-category').val(),
                latestVersion   = $('#latest-version').val(),
                prerequisites   = $('#prerequisites').val(),
                productUrl      = $('#product-url').val(),
                description     = $('#description').val();

            if ( productId == '' ) {
                return createProductAction(productName, productLogo, productCategory, latestVersion, prerequisites, productUrl, description);
            } else {
                return editProductAction(productId, productName, productLogo, productCategory, latestVersion, prerequisites, productUrl, description);
            }
        });
    </script>
    <script type="text/javascript">
        function createProductAction(productName, productLogo, productCategory, 
                    latestVersion, prerequisites, productUrl, description) {
            $('button.positive', '#product').html('Processing...');
            $('button.positive', '#product').attr('disabled', 'disabled');
            $('.form', '#product').addClass('loading');
            $('.message', '#product').addClass('hide');

            var postData = {
                'productName': productName, 
                'productLogo': productLogo, 
                'productCategory': productCategory, 
                'latestVersion': latestVersion, 
                'prerequisites': prerequisites, 
                'productUrl': productUrl, 
                'description': description
            };

            $.ajax({
                type: 'POST',
                url: '<c:url value="/accounts/createProduct.action" />',
                data: postData,
                dataType: 'JSON',
                success: function(result) {
                    $('button.positive', '#product').html('Create Product');
                    $('button.positive', '#product').removeAttr('disabled');
                    $('.form', '#product').removeClass('loading');

                    processProductResult(result);
                }
            });
        }
    </script>
    <script type="text/javascript">
        function editProductAction(productId, productName, productLogo, 
                    productCategory, latestVersion, prerequisites, productUrl, description) {
            $('button.positive', '#product').html('Saving...');
            $('button.positive', '#product').attr('disabled', 'disabled');
            $('.form', '#product').addClass('loading');
            $('.message', '#product').addClass('hide');

            var postData = {
                'productId': productId, 
                'productName': productName, 
                'productLogo': productLogo, 
                'productCategory': productCategory, 
                'latestVersion': latestVersion, 
                'prerequisites': prerequisites, 
                'productUrl': productUrl, 
                'description': description
            };

            $.ajax({
                type: 'POST',
                url: '<c:url value="/accounts/editProduct.action" />',
                data: postData,
                dataType: 'JSON',
                success: function(result) {
                    $('button.positive', '#product').html('Save');
                    $('button.positive', '#product').removeAttr('disabled');
                    $('.form', '#product').removeClass('loading');

                    processProductResult(result);
                }
            });
        }
    </script>
    <script type="text/javascript">
        function processProductResult(result) {
            var message = '';

            if ( result['isSuccessful'] ) {
                $('.message', '#product').removeClass('error');
                $('.message', '#product').addClass('success');

                if ( $('button.positive', '#product').html() == 'Save' ) {
                    message      = '<spring:message code="testzilla.accounts.dashboard.error.product-edit-success" text="Your product is edited successfully." />';
                } else {
                	var pageNumber = 1;
                    getProducts(pageNumber);
                    
                	$('input, textarea', '#product').val('');
                    message      = '<spring:message code="testzilla.accounts.dashboard.error.product-create-success" text="Your product is created successfully." />';
                }
            } else {
                $('.message', '#product').removeClass('success');
                $('.message', '#product').addClass('error');

                if ( 'hasEnoughCredits' in result && !result['hasEnoughCredits'] ) {
                    message += '<spring:message code="testzilla.accounts.dashboard.error.create-product-lack-credits" text="You didn&apos;t have enough credits to create a product." /><br>';
                } 
                if ( 'isDeveloperEmpty' in result && result['isDeveloperEmpty'] ) {
                    message += '<spring:message code="testzilla.accounts.dashboard.error.unable-create-product" text="You&apos;re not allowed to create a product." /><br>';
                } else if ( 'isDeveloperLegal' in result && !result['isDeveloperLegal'] ) {
                    message += '<spring:message code="testzilla.accounts.dashboard.error.unable-edit-product" text="You&apos;re not allowed to edit the product." /><br>';
                }
                if ( 'isProductNameEmpty' in result && result['isProductNameEmpty'] ) {
                    message += '<spring:message code="testzilla.accounts.dashboard.error.product-name-empty" text="You can&apos;t leave <strong>Product Name</strong> empty." /><br>';
                } else if ( 'isProductNameLegal' in result && !result['isProductNameLegal'] ) {
                    message += '<spring:message code="testzilla.accounts.dashboard.error.product-name-too-long" text="The length of <strong>Product Name</strong> must not exceed 32 characters." /><br>';
                }
                if ( 'isProductLogoEmpty' in result && result['isProductLogoEmpty'] ) {
                    message += '<spring:message code="testzilla.accounts.dashboard.error.product-logo-url-empty" text="You can&apos;t leave <strong>Product Logo URL</strong> empty." /><br>';
                } else if ( 'isProductLogoLegal' in result && !result['isProductLogoLegal'] ) {
                    message += '<spring:message code="testzilla.accounts.dashboard.error.product-logo-url-too-long" text="The length of <strong>Product Logo URL</strong> must not exceed 128 characters." /><br>';
                }
                if ( 'isProductCategoryEmpty' in result && result['isProductCategoryEmpty'] ) {
                    message += '<spring:message code="testzilla.accounts.dashboard.error.product-category-empty" text="Please choose your <strong>Product Category</strong>." /><br>';
                }
                if ( 'isLatestVersionEmpty' in result && result['isLatestVersionEmpty'] ) {
                    message += '<spring:message code="testzilla.accounts.dashboard.error.latest-version-empty" text="You can&apos;t leave <strong>Latest Version</strong> empty." /><br>';
                } else if ( 'isLatestVersionLegal' in result && !result['isLatestVersionLegal'] ) {
                    message += '<spring:message code="testzilla.accounts.dashboard.error.latest-version-too-long" text="The length of <strong>Latest Version</strong> must not exceed 24 characters." /><br>';
                }
                if ( 'isPrerequisitesEmpty' in result && result['isPrerequisitesEmpty'] ) {
                    message += '<spring:message code="testzilla.accounts.dashboard.error.prerequisites-empty" text="You can&apos;t leave <strong>Prerequisites</strong> empty." /><br>';
                } else if ( 'isPrerequisitesLegal' in result && !result['isPrerequisitesLegal'] ) {
                    message += '<spring:message code="testzilla.accounts.dashboard.error.prerequisites-too-long" text="The length of <strong>Prerequisites</strong> must not exceed 128 characters." /><br>';
                }
                if ( 'isProductUrlEmpty' in result && result['isProductUrlEmpty'] ) {
                    message += '<spring:message code="testzilla.accounts.dashboard.error.product-url-empty" text="You can&apos;t leave <strong>Product URL</strong> empty." /><br>';
                } else if ( 'isProductUrlLegal' in result && !result['isProductUrlLegal'] ) {
                    message += '<spring:message code="testzilla.accounts.dashboard.error.product-url-too-long" text="The length of <strong>Product URL</strong> must not exceed 256 characters." /><br>';
                }
                if ( 'isDescriptionEmpty' in result && result['isDescriptionEmpty'] ) {
                    message += '<spring:message code="testzilla.accounts.dashboard.error.product-description-empty" text="You can&apos;t leave <strong>Description</strong> empty." /><br>';
                }
            }

            $('.message', '#product').html(message);
            $('.message', '#product').removeClass('info');
            $('.message', '#product').removeClass('hide');
        }
    </script>
</body>
</html>