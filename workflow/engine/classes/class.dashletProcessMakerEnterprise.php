<?php

require_once 'interfaces/dashletInterface.php';

class dashletProcessMakerEnterprise implements DashletInterface {

  public static function getAdditionalFields($className) {
    $additionalFields = array();

    return $additionalFields;
  }

  public function setup($config) {
    return true;
  }

  public function render ($width = 300) {
    $html = "
    <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">

    <html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
      <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

      <title></title>
 
      <style type=\"text/css\">
      body{
        margin: 0;
        padding: 0;

        background: #FFFFFF;
        font: 100% arial, verdana, helvetica, sans-serif;
        color: #000000;
      }

      #container{
        margin: 0 auto;
      }
  
      .clearf{
        clear: both;

        height: 0;
        line-height: 0;
        font-size: 0;
      }

      .icon{
        float:left;
        
        margin-left: 0.5em;
    
        width: 2.5em;
      }

      .description{
        float: right;
        
        margin-right: 0.5em;
    
        width: 26.5em;
    
        font-size: 0.8em;
      }
  
      .icon img{
        width: 35px;
      }
      
      .description a{
        color: #1A4897;
        font-weight: bold;
      }
      
      .icon, .description{
        margin-top: 0.65em;
      }
      </style>
    </head>
    <body>
  
    <div id=\"container\">
      <div class=\"icon\">
        <a href=\"http://processmaker.com/workflow-inbox-and-bpm-inbox\" target=\"_blank\"><img src=\"http://processmaker.com/uploads/icon_list_builder.png\" /></a>
      </div>
      <div class=\"description\">
        <a href=\"http://processmaker.com/workflow-inbox-and-bpm-inbox\" target=\"_blank\">Custom Case List Builder</a>
        <br />
        Allows an admin to setup custom column views inside a user's cases boxes (inbox, draft, sent, etc). &nbsp;Information from report tables or Dynaforms can then be displayed in the columns making the inbox experience more relevent and useful to the user.
        <br />
        <a href=\"http://processmaker.com/workflow-inbox-and-bpm-inbox\" target=\"_blank\">Read More&gt;&gt;</a>
      </div>
      <div class=\"clearf\"></div>
      
      <div class=\"icon\">
        <a href=\"http://processmaker.com/bpm-ldap-and-bpm-active-directory\" target=\"_blank\"><img src=\"http://processmaker.com/uploads/icon_ldap.png\" /></a>
      </div>
      <div class=\"description\">
        <a href=\"http://processmaker.com/bpm-ldap-and-bpm-active-directory\" target=\"_blank\">Advanced LDAP/AD Sync Plug-in</a>
        <br />
        Syncronize with an LDAP or Active Directory Server for authentication, groups, and pass through authentication from Windows Domain Controller. Manage your users and groups from one application.
        <br />
        <a href=\"http://processmaker.com/bpm-ldap-and-bpm-active-directory\" target=\"_blank\">Read More&gt;&gt;</a>
      </div>
      <div class=\"clearf\"></div>

      <div class=\"icon\">
        <a href=\"http://processmaker.com/bpm-reports\" target=\"_blank\"><img src=\"http://processmaker.com/uploads/icon_simple_report.png\" /></a>
      </div>
      <div class=\"description\">
        <a href=\"http://processmaker.com/bpm-reports\" target=\"_blank\">Simple Reports Plug-in</a>
        <br />
        The Simple Reports plug-in allows ProcessMaker administrators to create reports based on any data involved in a process and grant permission for select users to view and export the report directly from their ProcessMaker inbox.
        <br />
        <a href=\"http://processmaker.com/bpm-reports\" target=\"_blank\">Read More&gt;&gt;</a>
      </div>
      <div class=\"clearf\"></div>

      <div class=\"icon\">
        <a href=\"http://processmaker.com/knowledgetree-workflow-document-management\" target=\"_blank\"><img src=\"http://processmaker.com/uploads/icon_knowledgetree.png\" /></a>
      </div>
      <div class=\"description\">
        <a href=\"http://processmaker.com/knowledgetree-workflow-document-management\" target=\"_blank\">Knowledgetree DMS Connector Plug-in</a>
        <br />
        Connector for Knowledgetree DMS which allows mapping of metadata, custom folder path mapping, and assigning KT file types. This connector replaces the native DMS functionality of ProcessMaker.
        <br />
        <a href=\"http://processmaker.com/knowledgetree-workflow-document-management\" target=\"_blank\">Read More&gt;&gt;</a>
      </div>
      <div class=\"clearf\"></div>
      
      <div class=\"icon\">
        <a href=\"http://processmaker.com/electronic-signatures-with-sigplus-signature-pads\" target=\"_blank\"><img src=\"http://processmaker.com/uploads/icon_digital.png\" /></a>
      </div>
      <div class=\"description\">
        <a href=\"http://processmaker.com/electronic-signatures-with-sigplus-signature-pads\" target=\"_blank\">SigPlus Signature Pads Plug-in for Electronic Signatures</a>
        <br />
        Plug-in which creates an integration for using SigPlus signature pads for electronically signing and generating signed PDFs in a ProcessMaker process. Signatures show in your Dynaforms in real time.
        <br />
        <a href=\"http://processmaker.com/electronic-signatures-with-sigplus-signature-pads\" target=\"_blank\">Read More&gt;&gt;</a>
      </div>
      <div class=\"clearf\"></div>
      
      <div class=\"icon\">
        <a href=\"http://processmaker.com/digitally-sign-web-forms-elock\" target=\"_blank\"><img src=\"http://processmaker.com/uploads/icon_elock.png\" /></a>
      </div>
      <div class=\"description\">
        <a href=\"http://processmaker.com/digitally-sign-web-forms-elock\" target=\"_blank\">Elock PKI Certified Digital Signature mobiSigner Connector Plug-in</a>
        <br />
        Plug-in which creates an integration with an Elock Digital Signature server and creates a digital signature field which can be added to web forms or can be used to digitally sign PDFs. This creates true PKI certified digital signatures with SHA encryption.
        <br />
        <a href=\"http://processmaker.com/digitally-sign-web-forms-elock\" target=\"_blank\">Read More&gt;&gt;</a>
      </div>
      <div class=\"clearf\"></div>
      
      <div class=\"icon\">
        <a href=\"http://processmaker.com/multi-tenant-management\" target=\"_blank\"><img src=\"http://processmaker.com/uploads/icon_multitenant.png\" /></a>
      </div>
      <div class=\"description\">
        <a href=\"http://processmaker.com/multi-tenant-management\" target=\"_blank\">Multitenant Management Tools Plug-in</a>
        <br />
        A series of visual web tools which turn a ProcessMaker server into a multi-tenant server so that a company can host “n” number of ProcessMaker workspaces on a single server and offer this service commercially to other clients. Includes tools to see the number of cases and processes running and turn customers off and on with a single click.
        <br />
        <a href=\"http://processmaker.com/multi-tenant-management\" target=\"_blank\">Read More&gt;&gt;</a>
      </div>
      <div class=\"clearf\"></div>
      
      <div class=\"icon\">
        <a href=\"http://processmaker.com/batch-routing-plugin\" target=\"_blank\"><img src=\"http://processmaker.com/uploads/icon_batch.png\" /></a>
      </div>
      <div class=\"description\">
        <a href=\"http://processmaker.com/batch-routing-plugin\" target=\"_blank\">Batch Routing Plug-in</a>
        <br />
        Allows users to enter data into cases from their ProcessMaker inbox and then derivate those cases directly to the next user. Data can be applied to multiple cases at once.
        <br />
        <a href=\"http://processmaker.com/batch-routing-plugin\" target=\"_blank\">Read More&gt;&gt;</a>
      </div>
      <div class=\"clearf\"></div>
      
      <div class=\"icon\">
        <a href=\"http://www.processmaker.com/bpm-outlook-integration\" target=\"_blank\"><img src=\"http://www.processmaker.com/uploads/icon_outlook.jpg\" /></a>
      </div>
      <div class=\"description\">
        <a href=\"http://www.processmaker.com/bpm-outlook-integration\" target=\"_blank\">Microsoft Outlook Plug-in</a>
        <br />
        This plug-in allows ProcessMaker users to manage their cases inbox, drafts, participated and other folders as well as start new cases directly from their MS Outlook client. Interact with ProcessMaker Dynaforms from the preview pane of Outlook.
        <br />
        <a href=\"http://www.processmaker.com/bpm-outlook-integration\" target=\"_blank\">Read More&gt;&gt;</a>
      </div>
      <div class=\"clearf\"></div>
      
      <div class=\"icon\">
        &nbsp;
      </div>
      <div class=\"description\">
        <a href=\"http://www.processmaker.com/single-sign-on-bpm-plugin\" target=\"_blank\">Single Sign On Plug-in For Active Directory</a>
        <br />
        Allows users to authenticate against an Active Directory server in order to access ProcessMaker. Therefore bypassing the ProcessMaker logon screen.
        <br />
        <a href=\"http://www.processmaker.com/single-sign-on-bpm-plugin\" target=\"_blank\">Read More&gt;&gt;</a>
      </div>
      <div class=\"clearf\"></div>
    </div>

    </body>
    </html>
    ";

    echo $html;
  }

}