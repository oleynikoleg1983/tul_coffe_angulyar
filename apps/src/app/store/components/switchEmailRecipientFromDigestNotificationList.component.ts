import { Component, Input, OnInit } from '@angular/core';
import { taskFormsService } from '../services/taskForms.service';
import { switchMailRecipientFromDigestNotificationListModel } from '../models/switchMailRecipientFromDigestNotificationList.model';

@Component({
  selector: 'switch-email-recipient-from-digest-notification-list',
  templateUrl: '../../../views/taskForms/componentForms/onOfemailRecipientFromDigestNotificationList.html'
})
export class switchMailRecipientFromDigestNotificationListComponent implements OnInit {

  public actions: any = [];
  public switchMailRecipientFromDigestNotificationList: switchMailRecipientFromDigestNotificationListModel;
  
  constructor(
    private _service: taskFormsService
  ) {
  }

  ngOnInit() {
    this.actions = [' ', 'Add', 'Remove'];
    this.switchMailRecipientFromDigestNotificationList = new switchMailRecipientFromDigestNotificationListModel();
  }

  public setAction(action) {
    this.switchMailRecipientFromDigestNotificationList.action = action;
  }

  public saveItem() {
    console.log('this.switchMailRecipientFromDigestNotificationList', this.switchMailRecipientFromDigestNotificationList);
    this._service.saveSwitchMailRecipientFromDigestNotificationList(this.switchMailRecipientFromDigestNotificationList)
      .then(() => {
        console.log('add data');
      })
      .catch(err => {
        console.log('err -- ', err);
        if (err.status == 400) {
          // this.errors = err.data;
        }
      })
  }

  public cancel() {
    console.log('cancel');
  }


  public onSelectStructure(data) {
    this.switchMailRecipientFromDigestNotificationList.provideListRecipients = data; 
  }
}
