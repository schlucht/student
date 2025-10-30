import { ApplicationConfig, provideBrowserGlobalErrorListeners, provideZoneChangeDetection } from '@angular/core';
import { provideRouter } from '@angular/router';

import { routes } from './app.routes';
import { provideHttpClient } from '@angular/common/http';

export const appConfig: ApplicationConfig = {
  providers: [
    provideBrowserGlobalErrorListeners(),
    provideZoneChangeDetection({ eventCoalescing: true }),
    provideRouter(routes),
    provideHttpClient(),    
  ]
};

export function API (path: string, id: string = "") {
  return `https://8888-firebase-student-1761727239472.cluster-64pjnskmlbaxowh5lzq6i7v4ra.cloudworkstations.dev/api/${path}.php`;
}

