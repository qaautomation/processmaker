var win;

Ext.onReady(function(){
  Ext.QuickTips.init();

  var store = new Ext.data.Store( {
    autoLoad: true,
    proxy : new Ext.data.HttpProxy({
      url: 'ajaxListener?action=getList&start=0&limit=20'
    }),
    reader : new Ext.data.JsonReader( {
      totalProperty: 'totalCount',
      root: 'data',
      fields : [
        {name : 'TRN_ID'},
        {name : 'TRN_CATEGORY'},
        {name : 'TRN_LANG'},
        {name : 'TRN_VALUE'},
        {name : 'TRN_UPDATE_DATE'}
      ]
    })
  });

  var comboCategory = new Ext.form.ComboBox({
    fieldLabel    : 'Category',
    name        : 'category',
    allowBlank     : true,
    store : new Ext.data.ArrayStore({
        fields: ['CATEGORY_UID', 'CATEGORY_NAME'],
        data : []
    }),

    valueField : 'CATEGORY_NAME',
    displayField : 'CATEGORY_NAME',
    typeAhead    : true,
    //mode         : 'local',
    triggerAction    : 'all',
    editable: true,
    forceSelection: true,
    selectOnFocus  : true
  });
  
    
  var grid = new Ext.grid.GridPanel( {
    id: 'grid',
    //autoHeight:true,
    //autoScroll:true,
    //width:'300',
    title : '',
    stateful : true,
    stateId : 'grid',
    enableColumnResize: true,
    enableHdMenu: true,
    //frame:false,
    //cls : '',
    //columnLines: true,

    viewConfig: {
      forceFit:true
    },
    clicksToEdit: 1,

    cm: new Ext.grid.ColumnModel({
      defaults: {
          width: 200,
          sortable: true
      },
      columns: [
        {header: 'ID', id:'TRN_ID', dataIndex: 'TRN_ID', hidden:false, hideable:true, width: 350,
          editor: new Ext.form.TextField({allowBlank: true, readOnly:true})
        } ,
        {header: 'Value', dataIndex: 'TRN_VALUE', width: 300, renderer:function(v,p,r){
          var label = v.length > 20 ? v.substring(0, 20) + '...' : v;
          return String.format("<font color='green'>{0}</font>", label);
        }},
        {header: 'Lang', dataIndex: 'TRN_LANG', width: 300},
        {header: 'Category', dataIndex: 'TRN_CATEGORY', width: 300},
        {header: 'Date', dataIndex: 'TRN_UPDATE_DATE', width: 300}
      ]
    }),

    store: store,

    tbar:[
      {
        text:_('ID_ADD'),
        iconCls: 'button_menu_ext ss_sprite ss_add',
        handler: newLabel
      },{
        text:_('ID_REMOVE'),
        iconCls: 'button_menu_ext ss_sprite  ss_delete',
        handler: removeLabel
      },{
        text: '&nbsp;Rebuild',
        icon: '/images/trigger.gif',
        handler: rebuild
      },'->',
      new Ext.form.TextField ({
        id: 'searchTxt',
        ctCls:'pm_search_text_field',
        allowBlank: true,
        width: 150,
        emptyText: _('ID_ENTER_SEARCH_TERM'),//'enter search term',
        listeners: {
          specialkey: function(f,e){
            if (e.getKey() == e.ENTER) {
              doSearch();
            }
          }
        }
      })
    ],
    bbar: new Ext.PagingToolbar({
        pageSize: 15,
        store: store,
        displayInfo: true,
        displayMsg: 'Displaying items {0} - {1} of {2}',
        emptyMsg: "",
        items:[
        ]
    }),
    listeners: {
      rowdblclick: function(){},
      render: function(){
        this.loadMask = new Ext.LoadMask(this.body, {msg:_('ID_LOADING')});
        this.ownerCt.doLayout();
      }
    }
  });

  grid.getSelectionModel().on('rowselect', function(){
    var rowSelected = grid.getSelectionModel().getSelected();
    Ext.getCmp('editValue').setValue(rowSelected.data.TRN_VALUE);
    Ext.getCmp('label1').setValue(rowSelected.data.TRN_ID);

  });


  Ext.getCmp('grid').store.on('load', function(){
    //Ext.getCmp('grid').getSelectionModel().selectRow(Ext.getCmp('grid').getSelectionModel().lastActive);
    //Ext.getCmp('grid').fireEvent('rowclick', Ext.getCmp('grid'), Ext.getCmp('grid').getSelectionModel().lastActive)
    
    }, this, {
    single: true
  });


        
  centerPanel = new Ext.Panel({
    layout: 'fit',
    region: 'center', // a center region is ALWAYS required for border layout
    //deferredRender: false,
    items: [grid]
  });


  var southPanel = new Ext.Panel({
    id:'southPanel',
    region: 'south',
    layout: 'fit',
    //width: 200,
    height: 120,
    minSize: 100,
    maxSize: 400,
    split: true,
    collapsible: true,
    collapseMode: 'mini',
    margins: '0 0 0 2',
    items: [{
        id: 'editValue',
        xtype:'textarea'
      }
    ],
    tbar:[ new Ext.form.TextField ({
      id: 'label1',
      allowBlank: true,
      width: 600,
      readOnly: true
    })],
    bbar: [{
      text: 'Save',
      iconCls: 'ss_sprite ss_disk',
      handler: saveEdit
    }],
  });
  
  var viewport = new Ext.Viewport({
    layout: 'border',
    items: [ centerPanel,southPanel]
  });
});

var edit = function(){
  var rowSelected = Ext.getCmp('grid').getSelectionModel().getSelected();
  rowSelected.data.TRN_ID

  Ext.Ajax.request({
    url : 'ajaxListener' ,
    params : {action:'get', ID : rowSelected.data.TRN_ID },
    success: function ( result, request ) {
      store.reload();
      var activator = Ext.getCmp('activator');
      activator.setDisabled(true);
      activator.setText('Status');
      activator.setIcon('');
    },
    failure: function ( result, request) {
      Ext.MessageBox.alert('Failed', result.responseText);
    }
  });
}

function newLabel()
{
  var frm = new Ext.FormPanel( {
    id: 'formNew',
    labelAlign : 'right',
    labelWidth : 100,
    width : 400,
    items : [ {
        id: 'id',
        fieldLabel: 'ID', 
        xtype:'textfield',
        width: 350  
      },  {
        id: 'label',
        fieldLabel: 'Label',
        xtype:'textarea',
        width: 350,
        height: 50
      }
    ],
    buttons : [{
      text : _('ID_SAVE'),
      handler : saveNew
    },{
      text : _('ID_CANCEL'),
      handler : function() {
        win.close();
      }
    }]   
  });

  win = new Ext.Window({
    //id: 'winNew',
    title: _('ID_NEW'),
    width: 490,
    height: 150,
    layout:'fit',
    autoScroll:true,
    modal: true,
    maximizable: false,
    items: [frm]
  });
  win.show();
}

function doSearch(){
  var filter = Ext.getCmp('searchTxt').getValue();
  var store = Ext.getCmp('grid').store;
  store.setBaseParam('search', filter);
  store.load({params:{search: filter, start : 0 , limit : 25 }});
}


function saveNew()
{
  var id = Ext.getCmp('id').getValue();
  var label = Ext.getCmp('label').getValue();
  
  Ext.getCmp('formNew').getForm().submit( {
    url : 'ajaxListener?action=save&id'+id+'&label='+label,
    waitMsg : 'Saving...',
    timeout : 36000,
    success : function(obj, resp) {
      Ext.getCmp('grid').store.reload();
      PMExt.notify('SAVE', resp.result.msg);
      win.hide();
    },
    failure: function(obj, resp) {
      Ext.Msg.alert( _('ID_ERROR'), resp.result.msg);
    },
  });
}

function saveEdit()
{
  var rows = Ext.getCmp('grid').getSelectionModel().getSelections();

  if( rows.length == 1 ){

    Ext.Ajax.request({
      url : 'ajaxListener',
      success: function(response) {
        Ext.MessageBox.hide();
        result = Ext.util.JSON.decode(response.responseText);
        if(result.success){
          var grid = Ext.getCmp('grid');
          
          PMExt.notify('SAVE EDIT', result.msg);
          grid.store.reload();
          setTimeout('selectRow()', 1100);
        } else
          PMExt.error('Error', result.msg);
      },
      params: {action:'save', id: rows[0].get('TRN_ID'), label: Ext.getCmp('editValue').getValue()}
    });
    
  } else PMExt.error('ERROR', 'Just select one item from the list to edit!');
}

function removeLabel()
{
  var rows = Ext.getCmp('grid').getSelectionModel().getSelections();
  if( rows.length > 0 ) {
    ids = Array();
    for(i=0; i<rows.length; i++)
      ids[i] = rows[i].get('TRN_ID');

    IDS = ids.join(',');

    Ext.Msg.confirm(
      'Delete',
      'Delete the selected translations?',
      function(btn, text){
        if ( btn == 'yes' ){
          Ext.MessageBox.show({ msg: TRANSLATIONS.ID_DELETING_ELEMENTS, wait:true,waitConfig: {interval:200} });
          Ext.Ajax.request({
            url: 'ajaxListener',
            success: function(response) {
              Ext.MessageBox.hide();
              result = Ext.util.JSON.decode(response.responseText);
              if(result.success){
                PMExt.notify('REMOVE', result.msg);
                Ext.getCmp('grid').store.reload();
              } else
                PMExt.error('Error', result.msg);
            },
            params: {action:'delete', IDS: IDS}
          });
        }
      }
    );
  } else {
    PMExt.error('ERROR', TRANSLATIONS.ID_NO_SELECTION_WARNING);
  }
  
}

function rebuild()
{
  Ext.MessageBox.show({ msg: 'Rebuilding translations..', wait:true,waitConfig: {interval:200} });
  Ext.Ajax.request({
    url: 'ajaxListener',
    params: {action:'rebuild'},
    success: function(response) {
      Ext.MessageBox.hide();
      result = Ext.util.JSON.decode(response.responseText);
      if(result.success){
        
        var text = 'Cache file: ' + result.cacheFile + '<br/>';
        //text += 'JS Cache file: ' + result.cacheFileJS + '<br/>';
        text += 'Rows: ' + result.rows + '<br/>';
        //text += 'JS ROws: ' + result.rowsJS + '<br/>';
        
        //PMExt.info('Result', text);
        PMExt.notify('REBUILD SUCCESS', text);
      } else
        PMExt.error('Error', result.msg);
    }
  });
}

function selectRow(){
  Ext.getCmp('grid').getSelectionModel().selectRow(Ext.getCmp('grid').getSelectionModel().lastActive);
  Ext.getCmp('grid').fireEvent('rowclick', Ext.getCmp('grid'), Ext.getCmp('grid').getSelectionModel().lastActive)
}


