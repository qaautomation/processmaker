TRUNCATE TABLE APP_CACHE_VIEW;

SET @DEFAULT_LANG = '{lang}';

INSERT INTO APP_CACHE_VIEW
SELECT
  APPLICATION.APP_UID,
  APP_DELEGATION.DEL_INDEX,
  APPLICATION.APP_NUMBER,
  APPLICATION.APP_STATUS,
  APP_DELEGATION.USR_UID,
  APP_LAST_USER.USR_UID,
  APP_DELEGATION.TAS_UID,
  APP_DELEGATION.PRO_UID,
  substring(APP_DELEGATION.DEL_DELEGATE_DATE,1,10),
  substring(APP_DELEGATION.DEL_INIT_DATE,1,10), 
  substring(APP_DELEGATION.DEL_TASK_DUE_DATE,1,10),
  substring(APP_DELEGATION.DEL_FINISH_DATE,1,10),
  APP_DELEGATION.DEL_THREAD_STATUS,
  APP_THREAD.APP_THREAD_STATUS,
  APP_TITLE.CON_VALUE AS APP_TITLE,
  PRO_TITLE.CON_VALUE AS APP_PRO_TITLE,
  TAS_TITLE.CON_VALUE AS APP_TAS_TITLE,
  CONCAT(USERS.USR_LASTNAME,  ' ',  USERS.USR_FIRSTNAME) AS APP_CURRENT_USER,
  CONCAT(APP_LAST_USER.USR_LASTNAME,  ' ',  APP_LAST_USER.USR_FIRSTNAME) AS APP_DEL_PREVIOUS_USER,
  APP_DELEGATION.DEL_PRIORITY,
  APP_DELEGATION.DEL_DURATION,
  APP_DELEGATION.DEL_QUEUE_DURATION,
  APP_DELEGATION.DEL_DELAY_DURATION,
  if( APP_DELEGATION.DEL_INIT_DATE IS NULL   , 0 , 1 ),
  if( APP_DELEGATION.DEL_FINISH_DATE IS NULL , 0 , 1 ),
  APP_DELEGATION.DEL_DELAYED,
  APPLICATION.APP_CREATE_DATE,
  NULL, 
  APPLICATION.APP_UPDATE_DATE,
  APP_DELEGATION.APP_OVERDUE_PERCENTAGE
FROM
  APPLICATION LEFT JOIN APP_DELEGATION ON (APPLICATION.APP_UID=APP_DELEGATION.APP_UID)
  LEFT  JOIN TASK ON (APP_DELEGATION.TAS_UID=TASK.TAS_UID) LEFT JOIN USERS ON (APP_DELEGATION.USR_UID=USERS.USR_UID)
  LEFT  JOIN APP_THREAD ON (APPLICATION.APP_UID=APP_THREAD.APP_UID AND APP_DELEGATION.DEL_INDEX=APP_THREAD.DEL_INDEX)
  LEFT  JOIN CONTENT APP_TITLE ON (APPLICATION.APP_UID=APP_TITLE.CON_ID AND APP_TITLE.CON_CATEGORY='APP_TITLE' AND APP_TITLE.CON_LANG = @DEFAULT_LANG)
  LEFT  JOIN CONTENT PRO_TITLE ON (APPLICATION.PRO_UID=PRO_TITLE.CON_ID AND PRO_TITLE.CON_CATEGORY='PRO_TITLE' AND PRO_TITLE.CON_LANG = @DEFAULT_LANG)
  LEFT  JOIN CONTENT TAS_TITLE ON (APP_DELEGATION.TAS_UID=TAS_TITLE.CON_ID AND TAS_TITLE.CON_CATEGORY='TAS_TITLE' AND TAS_TITLE.CON_LANG = @DEFAULT_LANG)
  LEFT  JOIN APP_DELEGATION APP_PREV_DEL ON (APPLICATION.APP_UID=APP_PREV_DEL.APP_UID AND APP_PREV_DEL.DEL_INDEX=APP_DELEGATION.DEL_PREVIOUS)
  LEFT  JOIN USERS APP_LAST_USER ON (APP_PREV_DEL.USR_UID=APP_LAST_USER.USR_UID)
WHERE
  TASK.TAS_TYPE<>'SUBPROCESS'
