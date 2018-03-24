import { Injectable } from '@angular/core';
import { HttpHeaders, HttpClient, HttpParams } from '@angular/common/http';


import { Observable } from 'rxjs/Observable';

@Injectable()
export class AbstractService {
  protected _apiUrl: string;
  protected $user: any;

  constructor(protected http: HttpClient
  ) {

    try {
    //  this.$user = (<any>window).session.user;
    } catch (e) {
      console.log('---err', e);
    }
    //console.log('user -- ', this.$user);
  }

  protected _getUrlParams(params: any) {
    if (Array.isArray(params)) {
      return params.join('&');
    }

    var parts: string[] = [];
    var keys = Object.keys(params);
    keys.forEach(k => {
      parts.push(k + '=' + encodeURIComponent(params[k]));
    });
    return parts.join('&');
  }

  public static getAdditionalHeaders() {
    return new HttpHeaders({
      'Content-Type': 'application/json',
      'If-Modified-Since': 'Mon, 26 Jul 1997 05:00:00 GMT',//no cache
      'Cache-Control': 'no-cache',//no cache
      'Pragma': 'no-cache'//no cache
    });
  }

  public static getAdditionalHeadersUrlencoded() {
    return new HttpHeaders({
      'Content-Type': 'application/x-www-form-urlencoded',
      'If-Modified-Since': 'Mon, 26 Jul 1997 05:00:00 GMT',
      'Cache-Control': 'no-cache',
      'Pragma': 'no-cache'
    });
  }


  protected _post(action?: string, id?: string, body?: any) {
    return this.post(this._apiUrl + (id ? '/' + id : '') + (action ? '?action=' + action : ''), JSON.stringify(body));
  }

  protected _put(action?: string, id?: string, body?: any) {
    return this.put(this._apiUrl + (id ? '/' + id : '') + (action ? '?action=' + action : ''), JSON.stringify(body));
  }

  /* overwrited */
  protected put(url: string, body: string, options?: any): any {
    options = options || {};
    options.headers = AbstractService.getAdditionalHeaders();

    return new Promise((reslv, reject) => {
      this.http
        .put(url, body, options)
        .toPromise()
        .then(reslv)
        .catch((err: any) => {
          if (err.status == 403) {
          }
          reject(err);
        });
    });
  }

  protected postUrlencoded(url: string, body: any, options?: any): any {

    options = options || {};
    options.headers = AbstractService.getAdditionalHeadersUrlencoded();

    return new Promise((reslv, reject) => {
      this.http
        .post(url, body, options)
        .toPromise()
        .then(reslv)
        .catch((err: any) => {
          if (err.status == 403) {
          }
          reject(err);
        });
    });
  }

  protected post(url: string, body: string, options?: any): any {
    options = options || {};
    options.headers = AbstractService.getAdditionalHeaders();

    return new Promise((reslv, reject) => {
      this.http
        .post(url, body, options)
        .toPromise()
        .then(reslv)
        .catch((err: any) => {
          if (err.status == 403) {
          }
          reject(err);
        });
    });
  }

  protected delete(url: string, options?: any): any {
    options = options || {};
    options.headers = AbstractService.getAdditionalHeaders();

    return new Promise((reslv, reject) => {
      this.http
        .delete(url, options)
        .toPromise()
        .then(reslv)
        .catch((err: any) => {
          if (err.status == 403) {
          }
          reject(err);
        });
    });
  }

  protected get(url: string, options?: any): any {

    options = options || {};
    options.headers = AbstractService.getAdditionalHeaders();

    return new Promise((reslv, reject) => {
      this.http
        .get(url, options)
        .toPromise()
        .then(reslv)
        .catch((err: any) => {
          reject(err);
        });
    });
  }

}
