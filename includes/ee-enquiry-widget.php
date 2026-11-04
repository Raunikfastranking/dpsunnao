<?php
/**
 * ExtraaEdge enquiry form embed for page body (not popup).
 * Set $ee_form_container_id before include for a unique container id.
 */
$ee_form_container_id = preg_replace('/[^a-zA-Z0-9_-]/', '', (string)($ee_form_container_id ?? 'ee-form-21-page'));
if ($ee_form_container_id === '') {
    $ee_form_container_id = 'ee-form-21-page';
}
?>
<style>
/* Thank You modal above page content / enquiry popup */
.jquery-modal,
.blocker,
.blocker.current {
    z-index: 10050 !important;
}
.jquery-modal .modal,
.jquery-modal .modal-content {
    z-index: 10051 !important;
}

/* Page enquiry form — keep existing page width/height feel */
.dps-ee-page-form,
.dps-ee-page-form .ee-form-widget {
    --ee-primary-color: #005224;
    --ee-success-color: #005224;
    --ee-border-color: #d1d5db;
    --ee-main-txt-color: #111;
    width: 100% !important;
    background: #fff !important;
}
.dps-ee-page-form .ee-container {
    padding: 0 !important;
    border-radius: 0 !important;
    background: transparent !important;
    box-shadow: none !important;
}
/* Page already has title — hide widget heading */
.dps-ee-page-form .modal-header,
.dps-ee-page-form .ee-form-heading {
    display: none !important;
}
.dps-ee-page-form .ee-form-body > .ee-row {
    margin: 0 0 16px 0 !important;
    width: 100% !important;
}
.dps-ee-page-form .ee-form-body.TWO_COLUMNS {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
}
.dps-ee-page-form .ee-form-body.TWO_COLUMNS > .ee-row:not(.full-width) {
    width: calc(50% - 8px) !important;
    margin: 0 !important;
}
.dps-ee-page-form .ee-form-body.TWO_COLUMNS > .ee-row.full-width {
    width: 100% !important;
    margin: 0 0 16px 0 !important;
}
.dps-ee-page-form input:not([type="checkbox"]):not([type="radio"]):not([type="search"]):not([type="tel"]),
.dps-ee-page-form select,
.dps-ee-page-form textarea,
.dps-ee-page-form .select2-container--default .select2-selection--single {
    min-height: 44px !important;
    height: 44px !important;
    border: 1px solid #d1d5db !important;
    border-radius: 6px !important;
    padding: 11px !important;
    font-size: 14px !important;
    background: #fff !important;
    width: 100% !important;
    box-sizing: border-box !important;
}
.dps-ee-page-form .select2-container {
    width: 100% !important;
}
.dps-ee-page-form .select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 22px !important;
    padding-left: 0 !important;
    color: #808080cc !important;
}
.dps-ee-page-form .select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 42px !important;
}
.dps-ee-page-form .iti {
    width: 100% !important;
    display: block !important;
    position: relative !important;
}
.dps-ee-page-form .iti input[type="tel"],
.dps-ee-page-form .iti input[type="text"],
.dps-ee-page-form .iti--separate-dial-code input,
.dps-ee-page-form .iti--allow-dropdown input {
    width: 100% !important;
    min-height: 44px !important;
    height: 44px !important;
    border: 1px solid #d1d5db !important;
    border-radius: 6px !important;
    font-size: 14px !important;
    background: #fff !important;
    box-sizing: border-box !important;
    padding-top: 11px !important;
    padding-bottom: 11px !important;
    padding-right: 11px !important;
    padding-left: 96px !important;
    margin: 0 !important;
}
.dps-ee-page-form .iti__flag-container {
    left: 0 !important;
    right: auto !important;
}
.dps-ee-page-form .iti__selected-flag {
    height: 100% !important;
    padding: 0 8px !important;
    display: flex !important;
    align-items: center !important;
}
.dps-ee-page-form .iti__selected-dial-code {
    margin-left: 4px !important;
    font-size: 14px !important;
    color: #333 !important;
}
.dps-ee-page-form .inline-inputs {
    display: flex !important;
    align-items: center;
    gap: 8px;
    width: 100%;
}
.dps-ee-page-form .countryCode-input + input {
    width: calc(100% - 70px) !important;
    flex: 1 1 auto !important;
}
.dps-ee-page-form label:not([for]) {
    display: none !important;
}
.dps-ee-page-form .ee-form-footer {
    margin-top: 8px !important;
}
.dps-ee-page-form .btn.btn-submit {
    width: 100% !important;
    display: block !important;
    background: #005224 !important;
    border: 1px solid #005224 !important;
    color: #fff !important;
    border-radius: 6px !important;
    padding: 16px !important;
    font-size: 18px !important;
    font-weight: 600 !important;
    min-height: 52px;
}
.dps-ee-page-form .btn.btn-submit:hover {
    background: #dc2626 !important;
    border-color: #dc2626 !important;
    color: #fff !important;
}
.dps-ee-page-form .ee-form-instruction,
.dps-ee-page-form small,
.dps-ee-page-form .consent-text,
.dps-ee-page-form label {
    font-size: 14px !important;
    font-weight: 400 !important;
    color: #374151 !important;
    line-height: 1.4 !important;
}
@media (max-width: 640px) {
    .dps-ee-page-form .ee-form-body.TWO_COLUMNS > .ee-row:not(.full-width) {
        width: 100% !important;
    }
}
</style>
<div id="<?= htmlspecialchars($ee_form_container_id, ENT_QUOTES, 'UTF-8') ?>" class="dps-ee-page-form"></div>
<script>
(function () {
    var containerId = <?= json_encode($ee_form_container_id) ?>;
    window.ee_form_widget_baseurl = window.ee_form_widget_baseurl ||
        "https://eeconfigstaticfiles.blob.core.windows.net/staticfiles/ee-form-widget/";

    function ensureCss() {
        if (document.getElementById("__formWidgetCss")) return;
        var link = document.createElement("link");
        link.id = "__formWidgetCss";
        link.rel = "stylesheet";
        link.href = window.ee_form_widget_baseurl + "css/stylesheet.min.css";
        link.type = "text/css";
        document.getElementsByTagName("head")[0].appendChild(link);
    }

    function initIntoContainer() {
        if (typeof eeFormWidget === "undefined") return false;
        if (!document.getElementById(containerId)) return false;
        if (window["__eeInit_" + containerId]) return true;
        window["__eeInit_" + containerId] = true;
        var widget = new eeFormWidget();
        widget.init("superhouseeducation", "form-21", containerId);
        return true;
    }

    function boot() {
        ensureCss();
        if (initIntoContainer()) return;

        var existing = document.querySelector('script[src*="eeFormWidget.min.js"]');
        if (existing) {
            var tries = 0;
            var timer = setInterval(function () {
                tries++;
                if (initIntoContainer() || tries > 40) clearInterval(timer);
            }, 150);
            return;
        }

        var script = document.createElement("script");
        script.type = "text/javascript";
        script.src = window.ee_form_widget_baseurl + "js/eeFormWidget.min.js";
        script.onload = function () { initIntoContainer(); };
        document.getElementsByTagName("head")[0].appendChild(script);
    }

    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", boot);
    } else {
        boot();
    }
})();
</script>
