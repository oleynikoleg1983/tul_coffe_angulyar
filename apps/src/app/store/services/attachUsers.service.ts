import { Injectable } from '@angular/core';
import { AbstractService } from '../../base/abstract.service';

import { HttpParams } from '@angular/common/http';

@Injectable()
export class attachUsersService extends AbstractService {

  protected _apiUrl = '/Search/GetQueryResultObjectsByCriteria';
  public criteria = `<Criteria xmlns="http://Microsoft.EnterpriseManagement.Core.Criteria/"><Reference Id="Microsoft.Windows.Library" Version="7.5.8501.0" PublicKeyToken="31bf3856ad364e35" Alias="CustomMicrosoft_Windows_Library"/><Reference Id="Infopulse.WorkItem.Activity.TFSExtension.Library" Version="1.0.0.1" PublicKeyToken="38694063fd717cd9" Alias="CustomInfopulse_WorkItem_Activity_TFSExtension_Library"/><Reference Id="System.Library" Version="7.5.8501.0" PublicKeyToken="31bf3856ad364e35" Alias="System"/><Reference Id="Cireson.TimeTracker.ServiceRequest.Form" Version="7.5.2012.8" PublicKeyToken="e23393f59c2bd012" Alias="TimeTracker"/><Reference Id="System.WorkItem.Activity.Library" Version="7.5.3079.0" PublicKeyToken="31bf3856ad364e35" Alias="CustomSystem_WorkItem_Activity_Library"/><Reference Id="System.WorkItem.ServiceRequest.Library" Version="7.5.3079.0" PublicKeyToken="31bf3856ad364e35" Alias="CustomSystem_WorkItem_ServiceRequest_Library"/><Reference Id="ServiceManager.ServiceRequest.Library" Version="7.5.3079.607" PublicKeyToken="31bf3856ad364e35" Alias="CustomServiceManager_ServiceRequest_Library"/><Reference Id="Infopulse.ActivityManagement.Library" Version="1.0.0.3" PublicKeyToken="38694063fd717cd9" Alias="CustomInfopulse_ActivityManagement_Library"/><Reference Id="System.WorkItem.Library" Version="7.5.3079.607" PublicKeyToken="31bf3856ad364e35" Alias="CustomSystem_WorkItem_Library"/><Reference Id="Microsoft.EnterpriseManagement.ServiceManager.UI.Console" Version="7.5.3079.607" PublicKeyToken="31bf3856ad364e35" Alias="Console"/><Expression><And><Expression><SimpleExpression><ValueExpressionLeft><Property>$Context/Property[Type='System!System.ConfigItem']/ObjectStatus$</Property></ValueExpressionLeft><Operator>Equal</Operator><ValueExpressionRight><Value>{acdcedb7-100c-8c91-d664-4629a218bd94}</Value></ValueExpressionRight></SimpleExpression></Expression><Expression><SimpleExpression><ValueExpressionLeft><Property>$Context/Property[Type='CustomMicrosoft_Windows_Library!Microsoft.AD.UserBase']/OrganizationalUnit$</Property></ValueExpressionLeft><Operator>Equal</Operator><ValueExpressionRight><Value>Staff</Value></ValueExpressionRight></SimpleExpression></Expression></And></Expression></Criteria>`;
  public columnNames = 'DisplayName';
  public id = '10a7f898-e672-ccf3-8881-360bfb6a8f9a';
  //public filter :any = 'DisplayName~contains~'++''


  public getUsersForQuestion(fullname) {
    console.log('fulname', fullname)
    const body = new HttpParams()
      .set(`sort`, '')
      .set(`page`, '1')
      .set(`pageSize`, '18')
      .set(`group`, '')
      .set(`filter`, 'DisplayName~contains~\'' + fullname + '\'')
      .set(`id`, this.id)
      .set(`isProjection`, 'False')
      .set(`columnNames`, this.columnNames)
      .set(`criteria`, this.criteria);
    if (fullname) {
      console.log('fullname---', fullname);
    }


    return this.postUrlencoded(this._apiUrl, body);
  }
}
