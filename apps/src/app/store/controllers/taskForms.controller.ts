import { Component } from '@angular/core';
import { Location } from '@angular/common';
import { ActivatedRoute } from '@angular/router';
import { AbstractController } from '../../base/abstract.controller';

@Component({
  templateUrl: '../../../views/taskForms/pageTaskForms.html'
})

export class ControllerTaskForms extends AbstractController {
  
  public formType: string = '';
  public allRequests: any [];

  public managedClientServices: boolean = false;
  constructor(
  ) {
    super();
  }

  onChange() {
  }

  protected init() {
    this.getAllRequests()
  }

  public onComponent(data) {
    this.formType = data;
  }

  public getAllRequests() {
    this.allRequests = [
      {
        title: 'Managed Client Services',
        showChild: false,
        child: [
          {
            title: 'Request Other Software',
            formType: 'requestOtherSoftware',
          },
          {
            title: 'Request other Additional Hardware',
            formType: 'requestOtherAdditionalHardware',
          }
        ]
      },
      {
      title: 'SharePoint Management',
      showChild: false,
      child: [
          {
            title: 'Add/Remove email recipient(s) from digest notification list',
            formType: 'onOfemailRecipientFromDigestNotificationList',
          }
        ]
      }
    ];
  }
}
