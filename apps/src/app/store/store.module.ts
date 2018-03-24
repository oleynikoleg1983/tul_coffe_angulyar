import { NgModule, NO_ERRORS_SCHEMA } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { taskFormsService } from './services/taskForms.service';
import { attachUsersService } from './services/attachUsers.service';

//import {}
import { routes } from './routes';

import { ControllerTaskForms } from './controllers/taskForms.controller';

import { OtherSoftwareComponent } from './components/otherSoftwareForm.component';
import { RequestOtherAdditionalHardwareComponent } from './components/requestOtherAdditionalHardware.component';
import { switchMailRecipientFromDigestNotificationListComponent } from './components/switchEmailRecipientFromDigestNotificationList.component';
import { AttachUsersComponent } from './components/attachUsers.component';

@NgModule({
  imports: [
    CommonModule,
    routes,
    FormsModule
  ],
  schemas: [
    NO_ERRORS_SCHEMA
  ],
  declarations: [
    ControllerTaskForms,
    OtherSoftwareComponent,
    RequestOtherAdditionalHardwareComponent,
    switchMailRecipientFromDigestNotificationListComponent,
    AttachUsersComponent
  ],
  exports: [
    RouterModule
  ],
  providers: [
    taskFormsService,
    attachUsersService
    //     path1Service
  ]
})
export class StoreModule {
}
